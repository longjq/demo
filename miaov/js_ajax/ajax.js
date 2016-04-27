function ajax(method, url, data, success)
{

		
			
			var xhr = null;
			try{
				xhr = new XMLHttpRequest();
			}catch(e){
				xhr = new new ActiveXObject('Microsoft.XMLHTTP');
			}

			if (method == 'get' && data) {
				url += '?'+data;
			};
			
			xhr.open(method,url,true);
			if (method == 'get') {
				xhr.send();
			}else{
				xhr.setRequestHeader('content-type', 'application/x-www-form-urlencoded');
				xhr.send(data);
			}
			
			xhr.onreadystatechange = function(){
				if (xhr.readyState == 4) {
					
					if (xhr.status == 200) {
						success && success(xhr.responseText);
					}else{
						alert(xhr.status);
					}
				};
			}
		};
		/*
		form表单属性
			1、action
			2、method
			3、enctype
				默认是application/x-www-form-urlencoded（发html代码时使用）
				上传文件要修改为multipart/form-data（上传二进制文件使用，如图片，视频，音频等）
				纯文本为text/plain（发邮件纯文本时使用）
		*/

