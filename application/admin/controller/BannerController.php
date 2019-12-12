<?php
namespace app\admin\controller;
use app\admin\controller\CommonController;
use app\admin\model\Banner;
use think\Db;


class BannerController extends CommonController{

    public function index(){

		$bannerModel = new Banner();
		$bannerData = $bannerModel->paginate(10);	

		if ($bannerData) {

			return $this->fetch('',[	
				'bannerData' => $bannerData
			]);
		}

		return $this->fetch();
    }

    public function add(){

        if(request()->isPost()){
            //2.接受参数
            $postData = input('post.');
            $time = time();
            $postData["datetime"] = $time;

            // 3.验证器验证
            $result = $this->validate($postData,'Banner.add',[],true);
            // halt($result);
            if($result !== true){
                $this->error( implode(',',$result) );
            }

			$i=json_decode($postData['src'],true);

			$str = "";

			foreach ($i as $k => $v) {
				$str .= ",".$v;
			}

			$str = substr($str,1);
			$postData['src']=$str;
	
            $bannerModel = new Banner();
            $bannerAdd = $bannerModel->allowField(true)->save($postData);
            if($bannerAdd){
                $this->success("添加成功",url("admin/banner/index"));
            }else{
                $this->error('添加失败');
            }
        }
        return $this->fetch();
    }

    public function fileupload(){

		header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
		header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
		header("Cache-Control: no-store, no-cache, must-revalidate");
		header("Cache-Control: post-check=0, pre-check=0", false);
		header("Pragma: no-cache");

		if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
		    exit; // finish preflight CORS requests here
		}

		if ( !empty($_REQUEST[ 'debug' ]) ) {
		    $random = rand(0, intval($_REQUEST[ 'debug' ]) );
		    if ( $random === 0 ) {
		        header("HTTP/1.0 500 Internal Server Error");
		        exit;
		    }
		}

		// 5 minutes execution time
		@set_time_limit(5 * 60);

		$targetDir = './upload_tmp';
		$uploadDir = './upload';

		$cleanupTargetDir = true; // Remove old files
		$maxFileAge = 5 * 3600; // Temp file age in seconds

		// Create target dir
		if (!file_exists($targetDir)) {
		    @mkdir($targetDir);
		}

		// Create target dir
		if (!file_exists($uploadDir)) {
		    @mkdir($uploadDir);
		}

		// Get a file name
		if (isset($_REQUEST["name"])) {
		    $fileName = $_REQUEST["name"];
		} elseif (!empty($_FILES)) {
		    $fileName = $_FILES["file"]["name"];
		} else {
		    $fileName = uniqid("file");
		}

		$fileName=$this->unicode2utf8('"'.$fileName.'"');
		$fileName= iconv("UTF-8", "GBK", $fileName);//防止fopen语句失效

		//时间命名
		$name = explode(".", $fileName);
		$img_name = md5(uniqid(time(),true));
		$img_count = count($name);
		$img_type = $name[$img_count -1];
		$imgname = $img_name . "." . $img_type;
		//
		$filePath = $targetDir . DIRECTORY_SEPARATOR . $fileName;
		$uploadPath = $uploadDir . DIRECTORY_SEPARATOR . $imgname;

		// Chunking might be enabled
		$chunk = isset($_REQUEST["chunk"]) ? intval($_REQUEST["chunk"]) : 0;
		$chunks = isset($_REQUEST["chunks"]) ? intval($_REQUEST["chunks"]) : 1;


		// Remove old temp files
		if ($cleanupTargetDir) {
		    if (!is_dir($targetDir) || !$dir = opendir($targetDir)) {
		        die('{"jsonrpc" : "2.0", "error" : {"code": 100, "message": "Failed to open temp directory."}, "id" : "id"}');
		    }

		    while (($file = readdir($dir)) !== false) {

		        $tmpfilePath = $targetDir . DIRECTORY_SEPARATOR . $file;

		        // If temp file is current file proceed to the next
		        if ($tmpfilePath == "{$filePath}_{$chunk}.part" || $tmpfilePath == "{$filePath}_{$chunk}.parttmp") {
		            continue;
		        }

		        // Remove temp file if it is older than the max age and is not the current file
		        if (preg_match('/\.(part|parttmp)$/', $file) && (@filemtime($tmpfilePath) < time() - $maxFileAge)) {
		            @unlink($tmpfilePath);
		        }
		    }
		  
		    closedir($dir);
		}


		// Open temp file
		if (!$out = @fopen("{$filePath}_{$chunk}.parttmp", "wb")) {
		    die('{"jsonrpc" : "2.0", "error" : {"code": 102, "message": "Failed to open output stream."}, "id" : "id"}');
		}

		if (!empty($_FILES)) {
		    if ($_FILES["file"]["error"] || !is_uploaded_file($_FILES["file"]["tmp_name"])) {
		        die('{"jsonrpc" : "2.0", "error" : {"code": 103, "message": "Failed to move uploaded file."}, "id" : "id"}');
		    }

		    // Read binary input stream and append it to temp file
		    if (!$in = @fopen($_FILES["file"]["tmp_name"], "rb")) {
		        die('{"jsonrpc" : "2.0", "error" : {"code": 101, "message": "Failed to open input stream."}, "id" : "id"}');
		    }
		} else {
		    if (!$in = @fopen("php://input", "rb")) {
		        die('{"jsonrpc" : "2.0", "error" : {"code": 101, "message": "Failed to open input stream."}, "id" : "id"}');
		    }
		}

		while ($buff = fread($in, 4096)) {
		    fwrite($out, $buff);
		}

		@fclose($out);
		@fclose($in);

		rename("{$filePath}_{$chunk}.parttmp", "{$filePath}_{$chunk}.part");

		$index = 0;
		$done = true;
		for( $index = 0; $index < $chunks; $index++ ) {
		    if ( !file_exists("{$filePath}_{$index}.part") ) {
		        $done = false;
		        break;
		    }
		}
		if ( $done ) {
		    if (!$out = @fopen($uploadPath, "wb")) {
		        die('{"jsonrpc" : "2.0", "error" : {"code": 102, "message": "Failed to open output stream."}, "id" : "id"}');
		    }

		    if ( flock($out, LOCK_EX) ) {
		        for( $index = 0; $index < $chunks; $index++ ) {
		            if (!$in = @fopen("{$filePath}_{$index}.part", "rb")) {
		                break;
		            }

		            while ($buff = fread($in, 4096)) {
		                fwrite($out, $buff);
		            }

		            @fclose($in);
		            @unlink("{$filePath}_{$index}.part");
		        }

		        flock($out, LOCK_UN);
		    }
		    @fclose($out);
		}

		// Return Success JSON-RPC response
		die('{"jsonrpc" : "2.0", "result" : "'.$imgname.'", "id" : "id"}');
    }

	public function unicode2utf8($str){
		if(!$str) return $str;
		$decode = json_decode($str);
		if($decode) return $decode;
		$str = '["' . $str . '"]';
		$decode = json_decode($str);
		if(count($decode) == 1){
			return $decode[0];
		}
		return $str;
	}
 
	public function is_show(){

        $id = input('id');
        $usersData = Db::table('banner')->where('id',$id)->find();
        
        if($usersData){
        	if($usersData["is_show"] == 0){
        		Db::table('banner')->where('id', $id)->update(['is_show' => 1]);
        		$response = ['code' => 1,'msg'=>'操作成功']; 
               return json($response);
        	}else{
        		Db::table('banner')->where('id', $id)->update(['is_show' => 0]);
        		$response = ['code' => 2,'msg'=>'操作成功']; 
                return json($response);
        	}
        } 
	}


    public function upd(){

        if (request()->isPost()){

            //接收参数
            $postData = input("post.");

   			$img_path =$postData['img_path'];   /*新上传的图片信息*/
    		$i=json_decode($img_path,true);     /*字符串转数组处理*/

    		if (!empty($i)) {

			$str="" ;
    		foreach ($i as $key => $value) {

	    		$str.= ",".$value;
	    	}

    		$str=substr($str,1);
			if ($str && $postData['src']) {
      			$ptn = "/\S+/i";
      			$postData['src']=preg_grep($ptn, $postData['src']); /*把数组中含有空值的删除掉*/
			    $postData['src'] = implode(",",$postData['src']);
				$postData['src'].=",".$str;   /*将新上传的图片信息拼接进之前处理过的src字段中*/
				$postData['src']=explode(",",$postData['src']);  /*再将字符串转成数组*/
				$postData['src']=preg_grep($ptn, $postData['src']);  /*因为转成数组的情况下会出现一个空的值，通过正则判断把空的数组删除掉*/
				$postData['src'] = implode(",",$postData['src']);  /*转回去*/
				unset($postData['img_path']);  /*将新添加的name字段删除*/
			}
            }else{
            	$ptn = "/\S+/i";
			   	$postData['src']=preg_grep($ptn, $postData['src']);
			    $postData['src'] = implode(",",$postData['src']);
				$postData['src'].=$i;   /*将新上传的图片信息拼接进之前处理过的src字段中*/
				unset($postData['img_path']);  
            }		

            $result = $this->validate($postData,"Banner.upd",[],true);//验证
            if ($result !== true) {
                $this->error(implode(",", $result));
            }

            $bannerModel = new Banner();

            if($bannerModel->allowField(true)->isUpdate(true)->save($postData)){
                $this->success('编辑成功',url('/admin/banner/index'));
            }else{
                $this->success('编辑成功',url('/admin/banner/index'));
            }  
        }

        $id = input("id");
        $bannerModel = new Banner();
        $bannerData = $bannerModel->find($id);
		$img_path=explode(",",$bannerData['src']);

 		if (!$img_path) {
	        return $this->fetch('',[
        		'bannerData' => $bannerData,
	 		]);
 		}else{
			return $this->fetch('',[
	            'bannerData' => $bannerData, 
	            'img_path' => $img_path 
			]);
 		}
    }

    public function delpic(){

		$url = input("url");
		$id = input("id");

		if (file_exists ("./upload/".$url)) {  /*判断文件是否存在*/
			if (unlink("./upload/".$url)) {/*存在就删除*/

				$str = Db::table('banner')->where('id',$id)->field("src")->find(); /*查找即将操作的那条图片地址记录*/
				$str=implode($str);    /*将图片地址信数组转化成字符串*/
				if(strlen($str)>1){    /*假如这个字符串有值就执行*/
 
					$str=str_replace($url.',','',$str); 

					$str=str_replace(','.$url,'',$str); 

					$str=str_replace($url,'',$str);

					$bannerData['src']=$str;
				    $bannerModel = new Banner();
			        if ($bannerModel->where('id', $id)->update(['src' => $str])){

			            $response = ['code' => 1,'msg'=>'操作成功'];
			                $this->success("操作成功",url('admin/banner/index'));
			            return json($response);
			        }else{
			            $response = ['code' => 2,'msg'=>'修改失败'];
			            $this->error("修改失败");
			            return json($response);
			        }
					
				}else{
					return false;
				}
			} 
		}
    }

    public function del(){

        $bannerModel = new Banner();

        if ($this->submitcheck('deletesubmit')){

            $postData = input("post.");
            $ids = $postData["ids"];

            if(count($ids)>1){
                foreach ($ids as $id){

                    $bannerData = $bannerModel->find($id);

                    $src = explode(",",$bannerData['src']);

	                foreach ($src as $v) {

		                if(file_exists("./upload/".$v)){
		                    unlink("./upload/".$v);
		                }
	                }
                }
            }elseif(count($ids)==1) {

            	$bannerData = $bannerModel->find($ids);

                $src = explode(",",$bannerData['src']);

                foreach ($src as $v) {

	                if(file_exists("./upload/".$v)){
	                    unlink("./upload/".$v);
	                }
                }
            }else{
            	$this->error("请至少勾选一个");
            }

            if ($bannerModel->destroy($ids)) {
                $this->success("删除成功",url("/admin/banner/index"));
            }else{
                $this->error("删除失败");
            }

        }else{

            $id = input("id");

            $bannerData = $bannerModel->find($id);

            $src = explode(",",$bannerData['src']);

            foreach ($src as $v) {

                if(file_exists("./upload/".$v)){
                    unlink("./upload/".$v);
                }
            }

            if ($bannerModel->destroy($id)) {
                $this->success("删除成功",url("/admin/banner/index"));
            }else{
                $this->error("删除失败");
            }
        }
    }

    public function submitcheck($var) {
        if(!empty($_POST[$var]) && $_SERVER['REQUEST_METHOD'] == 'POST') {
            if((empty($_SERVER['HTTP_REFERER']) || preg_replace("/https?:\/\/([^\:\/]+).*/i", "\\1", $_SERVER['HTTP_REFERER']) == preg_replace("/([^\:]+).*/", "\\1", $_SERVER['HTTP_HOST']))) {
                return true;
            }else {
                exit();
            }
        }
    }
}








