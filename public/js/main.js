function dropDownRegister(){
		$("#registrationButton").hover(function () {
			$("#dropdownRegister").addClass("show");
			$("#registrationButton").attr("aria-expanded","true");
			$("#dropdownMenuRegister").addClass("show");
		})
		$("#dropdownRegister").mouseleave(function () {
			$("#dropdownRegister").removeClass("show");
			$("#dropdownMenuRegister").removeClass("show");
			$("#registrationButton").attr("aria-expanded","false");
		})
}
$(document).ready(function(){
	dropDownRegister();
	$('.test-popup-link').magnificPopup({
  type: 'image'
  // other options
});
})




/* Scripts for testing API client *********************************************/	

	/*
	  * API_KEY - your token;
	  * param - argument of method (if it need) / NUMBER;
      * method - name of method / STRING;
	*/
	var API_KEY; 
	var param;
	var method;
	
	
	/*
	  * Array of methods, every key === id of button;
	  * arrOfMethods['key'][0]- name of method;
	  * arrOfMethods['key'][1]- name of param;
	*/
	var arrOfMethods = {
	  met0: ['getUserDetails','userId'],
	  met1: ['getUserCoursesAndModules','userId'],
	  met2: ['getCourseInfo','courseId'],
	  met3: ['getModuleInfo','moduleId'],
	  met4: ['getCourseModules','courseId'],
	  met5: ['getCourseTags','courseId'],
	  met6: ['getModuleTags','moduleId'],
	  met7: ['getModuleLectures','moduleId']
	};

	
	/*
	  * Function that start after click in button "TRY";
	*/
	function testBtn(id){
		
		clickBack();

		if(id == "met0" || id == "met1"){	
			document.getElementById('paramForm').style.display = 'none';
		}
		else{
			document.getElementById('paramForm').style.display = 'block';
		}

        document.getElementById('param-test').placeholder='Введіть ваш '+arrOfMethods[id][1];
        document.getElementById('yourParam').innerText='Ваш '+arrOfMethods[id][1];
		document.getElementById("jsonRequest").innerHTML = '';

        method = arrOfMethods[id][0];
	}

	/*
	  * Function for get api_key(token) from form;
	*/
	function getAPI(){
		API_KEY = document.getElementById("api-test").value;
	}
	
	/*
	  * Function for get parametr of method from form (if it have it);
	*/
	function getParam(){
		param = document.getElementById("param-test").value;
	}
	
	
	/*
	  * Function that create INTITAClient();
	*/
	function createINTITAClient(){
		var client = new INTITAClient({
			key: API_KEY,
		});	
		return client;
	}
	
	/*
	  * Function for edit length of strings in json request;
	*/
	function clipStrings(data) {
		for (property in data) {
			if (typeof data[property] == 'object') {
			  clipStrings(data[property]);
			  continue;
			}
			if (typeof data[property] == 'string' && data[property].length > 30) {
			  data[property] = data[property].substr(0, 30) + "...";
			}
		}
	}
	
	/*
	  * Function for making comfortable text view of JSON;
	*/
	function createClient(){
		createINTITAClient()[method](param, function(error, data) {
			clipStrings(data);
			var jsonRequest = document.getElementById("jsonRequest");
			jsonRequest.innerHTML = jsonPrettyPrint.toHtml(data);
		});
	}

	
	/*
	  * Function for edit json request;
	*/
	var jsonPrettyPrint = {
	   replacer: function(match, pIndent, pKey, pVal, pEnd) {
		  var key = '<span class=json-key>';
		  var val = '<span class=json-value>';
		  var str = '<span class=json-string>';
		  var r = pIndent || '';
		  if (pKey)
			 r = r + key + pKey.replace(/[": ]/g, '') + '</span>: ';
		  if (pVal)
			 r = r + (pVal[0] == '"' ? str : val) + pVal + '</span>';
		  return r + (pEnd || '');
		  },
	   toHtml: function(obj) {
		  var jsonLine =
			 /^( *)("[\w]+": )?("[^"]*"|[\w.+-]*)?([,[{])?$/mg;
		  return JSON.stringify(obj, null, 3)
			 .replace(/&/g, '&amp;').replace(/\\"/g, '&quot;')
			 .replace(/</g, '&lt;').replace(/>/g, '&gt;')
			 .replace(jsonLine, jsonPrettyPrint.replacer);
		  }
	   };
	   
	   
	   
	/*
	  * Function show first stage of testing;
	*/    
	function firstStepTest(){
        document.getElementById("testApiModalLabel").innerHTML ="Тест " + method;
        document.getElementById("requestJsonModal").style.display = 'block';
        document.getElementById("modalQuestion").style.display = 'none';
	}
	/*
	  * Function for back to first stage;
	*/ 
	function clickBack(){
		document.getElementById("testApiModalLabel").innerHTML ="Тестування API INTITA";
		document.getElementById("requestJsonModal").style.display = 'none';
		document.getElementById("modalQuestion").style.display = 'block';
		document.getElementById("jsonRequest").innerHTML = '';
	} 
	   
	/*
	  * Function for start test api;
	*/   
    function startTestApi(){
        getAPI();
        getParam();
        createClient();
        firstStepTest();
    }
	
	
	
/* Scripts for testing API client end **********************************************/