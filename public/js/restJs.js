$(".header-minor").on("click", function(){
	$(this).next(".body-minor").not(":animated").slideToggle();
});

$(".header-main").on("click", function(){
	$(this).next(".body-main").not(":animated").slideToggle();
});

$("div.form-group>input.form-control").on("click", function () {
    $(this).css('border','1px solid #ced4da');
});


function getInformation(id,json) {
    var url = id.replace(/-/g,'/');
    var token = checkField('token',id);

    var settings = {
        "crossDomain": true,
        "url": "https://sso.intita.com/api/" + parseUrl(url, json, id),
        "method": "GET",
        "headers": {
            "authorization": "Bearer " + token
        },
        success:function (response) {
            var $elemForAnswer = $("#" + id).parent().next().children(".forjson").children();
            $elemForAnswer.html(jsonToHtml(response));
        },
        error:function () {
            $("#modalServeError").modal('show');
        }
    };

    $.ajax(settings);


}

function parseUrl(url,json,id) {
    if ( !(json[0] === undefined) ) {
         for (var key in json) {
             switch (json[key]) {
                 case 'lectureId' :
                     var lectureId = checkField('lectureId',id);
                     url = url.replace('lectureId', lectureId);
                     break;
                 case 'courseId' :
                     var courseId = checkField('courseId',id);
                     url = url.replace('courseId', courseId);
                     break;
                 case 'moduleId' :
                     var moduleId = checkField('moduleId',id);
                     url = url.replace('moduleId', moduleId);
                     break;
                 case 'pageId' :
                     var pageId = checkField('pageId',id);
                     url = url.replace("pageId", pageId);
                     break;
                 case 'groupId' :
                     var groupId = checkField('groupId',id);
                     url = url.replace("groupId", groupId);
                     break;
                 case 'tagId' :
                     var tagId = checkField('tagId',id);
                     url = url.replace("tagId", tagId);
                     break;
                 case 'subgroupId' :
                     var subgroupId = checkField('subgroupId',id);
                     url = url.replace('subgroupId', subgroupId);
                     break;
                 default :
                     console.log("error " + json[key]);
             }
         }
     }
    return url;
}

function jsonToHtml(json) {
    var result = JSON.stringify(json);
    result = result.replace(/},{/g,'<br>');
    result = result.replace(/,/g,'<br>');
    result = result.replace(/"/g,'');
    result = result.replace(/{/g,'<br>');
    result = result.replace(/}/g,'<br>');
    result = result.replace(/:/g,' : ');
    return result;
}

function checkField(fieldId,id) {
    var $field = $("#" + id + ">" + ".form-group" + "> ." + fieldId);
    if ($field.val())
        return $field.val();
    else {
        $("#modalEmptyField").modal('show');
        $field.css("border" , "1px solid #e62b2b");
        throw "Empty field " + fieldId + '.';
    }
}