@extends('layout.layout')

@section('content')
    <div class="container">
        <div class = "row">
            <div class = "col-md-12">
                <div class = "col-md-8">
                    <h2>В нас є декілька JS функцій для роботи із API-Client</h2>
                     <h4>Зараз ми спробуєм описати їх якомога краще для Вас..</h4>

                    <p>Отже, перше фунція має назву <span class="functionApi"> getUserDetails().</span>
                        З цієї назви можемо здогадатись, що дана функція повертає нам інформацію про власника токену.</p>
                    <div class="functionApiBorder">
                            <span>
                                <span class="fun-blue">getUserDetails</span>
                                <span>(userId, cb) {</span>
                            </span><br>
                            <span>&nbsp;&nbsp;&nbsp;&nbsp;
                                <span class="fun-red">if</span>
                                <span>(</span>
                                <span class="fun-red">typeof</span>
                                <span>userId</span>
                                <span class="fun-red">===</span>
                                <span class="fun-yel">'function'</span>
                                <span>) {</span>
                            </span><br>
                            <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <span>cb </span>
                                <span class="fun-red">= </span>
                                <span> userId;</span>
                            </span><br>
                            <span>&nbsp;&nbsp;&nbsp;&nbsp;
                                <span>} </span>
                                <span class="fun-red">else if </span>
                                <span>(</span>
                                <span class="fun-red">typeof </span>
                                <span> userId </span>
                                <span class="fun-red"> === </span>
                                <span class="fun-yel"> 'number' </span>
                                <span>) {</span>
                            </span><br>
                            <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <span class="fun-blue">console.warn </span>
                                <span>(</span>
                                <span class="fun-yel">"Deprecation notice. No need to specify user's id.<br>
                                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                       Fetching data about user other than token owner is rejected."</span>
                                <span>)</span>
                            </span><br>
                            <span>&nbsp;&nbsp;&nbsp;&nbsp;}</span><br>
                            <span>&nbsp;&nbsp;&nbsp;&nbsp;
                                <span class="fun-blue">const</span>
                                <span>url</span>
                                <span class="fun-red">=</span>
                                <span class="fun-yel">`${this.baseUrl}/user/detailed`</span>
                                <span>;</span>
                            </span><br>
                            <span>&nbsp;&nbsp;&nbsp;&nbsp;
                                <span class="fun-blue">const </span>
                                <span>promise</span>
                                <span class="fun-red">= </span>
                                <span>axios.</span>
                                <span class="fun-blue">get</span>
                                <span>(url);</span>
                            </span><br>
                            <span>&nbsp;&nbsp;&nbsp;&nbsp;
                                <span class="fun-red">return</span>
                                <span class="fun-blue">promiseOrCallback</span>
                                <span>(promise, cb);</span>
                            </span><br>
                            <span>}</span>



                            <a href="#" class="buttonTryApi" type="button" id="met0" onClick = "testBtn(id)" data-toggle="modal" data-target="#testFormApiModal">TRY</a>
                        </div>

                    <p>Друга фунція має назву <span class="functionApi">  getUserCoursesAndModules().</span>
                        Дана функція повертає нам інформацію про курси та модулі, які використовувались User-ом.</p>
                    <div class="functionApiBorder">
                            <span>
                                <span class="fun-blue">getUserCoursesAndModules</span>
                                <span>(userId, cb) {</span>
                            </span><br>
                        <span>&nbsp;&nbsp;&nbsp;&nbsp;
                                <span class="fun-red">if</span>
                                <span>(</span>
                                <span class="fun-red">typeof</span>
                                <span>userId</span>
                                <span class="fun-red">===</span>
                                <span class="fun-yel">'function'</span>
                                <span>) {</span>
                            </span><br>
                        <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <span>cb </span>
                                <span class="fun-red">= </span>
                                <span> userId;</span>
                            </span><br>
                        <span>&nbsp;&nbsp;&nbsp;&nbsp;
                                <span>} </span>
                                <span class="fun-red">else if </span>
                                <span>(</span>
                                <span class="fun-red">typeof </span>
                                <span> userId </span>
                                <span class="fun-red"> === </span>
                                <span class="fun-yel"> 'number' </span>
                                <span>) {</span>
                            </span><br>
                        <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <span class="fun-blue">console.warn </span>
                                <span>(</span>
                                <span class="fun-yel">"Deprecation notice. No need to specify user's id.<br>
                                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                       Fetching data about user other than token owner is rejected."</span>
                                <span>)</span>
                            </span><br>
                        <span>&nbsp;&nbsp;&nbsp;&nbsp;}</span><br>
                        <span>&nbsp;&nbsp;&nbsp;&nbsp;
                                <span class="fun-blue">const</span>
                                <span>url</span>
                                <span class="fun-red">=</span>
                                <span class="fun-yel">`${this.baseUrl}/user/modules/courses`</span>
                                <span>;</span>
                            </span><br>
                        <span>&nbsp;&nbsp;&nbsp;&nbsp;
                                <span class="fun-blue">const </span>
                                <span>promise</span>
                                <span class="fun-red">= </span>
                                <span>axios.</span>
                                <span class="fun-blue">get</span>
                                <span>(url);</span>
                            </span><br>
                        <span>&nbsp;&nbsp;&nbsp;&nbsp;
                                <span class="fun-red">return</span>
                                <span class="fun-blue">promiseOrCallback</span>
                                <span>(promise, cb);</span>
                            </span><br>
                        <span>}</span>



                        <a href="#" class="buttonTryApi" type="button" id="met1" onClick = "testBtn(id)" data-toggle="modal" data-target="#testFormApiModal">TRY</a>
                    </div>

                    <p>Третя фунція має назву <span class="functionApi">   getCourseInfo().</span>
                        Вона повертає нам інформацію про курси за номером ID.</p>
                    <div class="functionApiBorder">
                        <span>
                            <span class="fun-blue">getCourseInfo</span>
                            <span>(courseId, cb) {</span>
                        </span><br>
                        <span>&nbsp;&nbsp;&nbsp;&nbsp;
                                <span class="fun-blue">const</span>
                                <span>url</span>
                                <span class="fun-red">=</span>
                                <span class="fun-yel">`${this.baseUrl}/course/${courseId}`</span>
                                <span>;</span>
                            </span><br>
                        <span>&nbsp;&nbsp;&nbsp;&nbsp;
                                <span class="fun-blue">const </span>
                                <span>promise</span>
                                <span class="fun-red">= </span>
                                <span>axios.</span>
                                <span class="fun-blue">get</span>
                                <span>(url);</span>
                            </span><br>
                        <span>&nbsp;&nbsp;&nbsp;&nbsp;
                                <span class="fun-red">return</span>
                                <span class="fun-blue">promiseOrCallback</span>
                                <span>(promise, cb);</span>
                            </span><br>
                        <span>}</span>



                        <a href="#" class="buttonTryApi" type="button" id="met2" onClick = "testBtn(id)" data-toggle="modal" data-target="#testFormApiModal">TRY</a>
                    </div>

                    <p>Четверта фунція має назву <span class="functionApi">   getModuleInfo().</span>
                        Вона повертає нам інформацію про модуль за номером ID.</p>
                    <div class="functionApiBorder">
                        <span>
                            <span class="fun-blue">getModuleInfo</span>
                            <span>(moduleId, cb) {</span>
                        </span><br>
                        <span>&nbsp;&nbsp;&nbsp;&nbsp;
                                <span class="fun-blue">const</span>
                                <span>url</span>
                                <span class="fun-red">=</span>
                                <span class="fun-yel">`${this.baseUrl}/module/${moduleId}`</span>
                                <span>;</span>
                            </span><br>
                        <span>&nbsp;&nbsp;&nbsp;&nbsp;
                                <span class="fun-blue">const </span>
                                <span>promise</span>
                                <span class="fun-red">= </span>
                                <span>axios.</span>
                                <span class="fun-blue">get</span>
                                <span>(url);</span>
                            </span><br>
                        <span>&nbsp;&nbsp;&nbsp;&nbsp;
                                <span class="fun-red">return</span>
                                <span class="fun-blue">promiseOrCallback</span>
                                <span>(promise, cb);</span>
                            </span><br>
                        <span>}</span>
                        <a href="#" class="buttonTryApi" type="button" id="met3" onClick = "testBtn(id)" data-toggle="modal" data-target="#testFormApiModal">TRY</a>
                    </div>

                    <p>П'ята фунція має назву <span class="functionApi">   getCourseModules().</span>
                        Вона повертає нам список модулів та курсів за номером ID.</p>
                    <div class="functionApiBorder">
                        <span>
                            <span class="fun-blue">getCourseModules</span>
                            <span>(courseId, cb) {</span>
                        </span><br>
                        <span>&nbsp;&nbsp;&nbsp;&nbsp;
                                <span class="fun-blue">const</span>
                                <span>url</span>
                                <span class="fun-red">=</span>
                                <span class="fun-yel">`${this.baseUrl}/course/${courseId}/modules`</span>
                                <span>;</span>
                            </span><br>
                        <span>&nbsp;&nbsp;&nbsp;&nbsp;
                                <span class="fun-blue">const </span>
                                <span>promise</span>
                                <span class="fun-red">= </span>
                                <span>axios.</span>
                                <span class="fun-blue">get</span>
                                <span>(url);</span>
                            </span><br>
                        <span>&nbsp;&nbsp;&nbsp;&nbsp;
                                <span class="fun-red">return</span>
                                <span class="fun-blue">promiseOrCallback</span>
                                <span>(promise, cb);</span>
                            </span><br>
                        <span>}</span>
                        <a href="#" class="buttonTryApi" type="button" id="met4" onClick = "testBtn(id)" data-toggle="modal" data-target="#testFormApiModal">TRY</a>
                    </div>

                    <p>Шоста фунція має назву <span class="functionApi">   getCourseTags().</span>
                        Вона повертає нам список тем, вибраного нами курсу, за номером ID.</p>
                    <div class="functionApiBorder">
                        <span>
                            <span class="fun-blue">getCourseTags</span>
                            <span>(courseId, cb) {</span>
                        </span><br>
                        <span>&nbsp;&nbsp;&nbsp;&nbsp;
                                <span class="fun-blue">const</span>
                                <span>url</span>
                                <span class="fun-red">=</span>
                                <span class="fun-yel">`${this.baseUrl}/course/${courseId}/tags`</span>
                                <span>;</span>
                            </span><br>
                        <span>&nbsp;&nbsp;&nbsp;&nbsp;
                                <span class="fun-blue">const </span>
                                <span>promise</span>
                                <span class="fun-red">= </span>
                                <span>axios.</span>
                                <span class="fun-blue">get</span>
                                <span>(url);</span>
                            </span><br>
                        <span>&nbsp;&nbsp;&nbsp;&nbsp;
                                <span class="fun-red">return</span>
                                <span class="fun-blue">promiseOrCallback</span>
                                <span>(promise, cb);</span>
                            </span><br>
                        <span>}</span>
                        <a href="#" class="buttonTryApi" type="button" id="met5" onClick = "testBtn(id)" data-toggle="modal" data-target="#testFormApiModal">TRY</a>
                    </div>

                    <p>Сьома фунція має назву <span class="functionApi">   getModuleTags().</span>
                        Вона повертає нам список тем, вибраного нами модуля, за номером ID.</p>
                    <div class="functionApiBorder">
                        <span>
                            <span class="fun-blue">getModuleTags</span>
                            <span>(moduleId, cb) {</span>
                        </span><br>
                        <span>&nbsp;&nbsp;&nbsp;&nbsp;
                                <span class="fun-blue">const</span>
                                <span>url</span>
                                <span class="fun-red">=</span>
                                <span class="fun-yel">`${this.baseUrl}/module/${moduleId}/tags`</span>
                                <span>;</span>
                            </span><br>
                        <span>&nbsp;&nbsp;&nbsp;&nbsp;
                                <span class="fun-blue">const </span>
                                <span>promise</span>
                                <span class="fun-red">= </span>
                                <span>axios.</span>
                                <span class="fun-blue">get</span>
                                <span>(url);</span>
                            </span><br>
                        <span>&nbsp;&nbsp;&nbsp;&nbsp;
                                <span class="fun-red">return</span>
                                <span class="fun-blue">promiseOrCallback</span>
                                <span>(promise, cb);</span>
                            </span><br>
                        <span>}</span>
                        <a href="#" class="buttonTryApi" type="button" id="met6" onClick = "testBtn(id)" data-toggle="modal" data-target="#testFormApiModal">TRY</a>
                    </div>

                    <p>І нарешті восьма фунція має назву <span class="functionApi">   getModuleLectures().</span>
                        Вона повертає нам список лекцій, вибраного нами модуля, за номером ID.</p>
                    <div class="functionApiBorder">
                        <span>
                            <span class="fun-blue">getModuleLectures</span>
                            <span>(moduleId, cb) {</span>
                        </span><br>
                        <span>&nbsp;&nbsp;&nbsp;&nbsp;
                                <span class="fun-blue">const</span>
                                <span>url</span>
                                <span class="fun-red">=</span>
                                <span class="fun-yel">`${this.baseUrl}/module/${moduleId}/lectures`</span>
                                <span>;</span>
                            </span><br>
                        <span>&nbsp;&nbsp;&nbsp;&nbsp;
                                <span class="fun-blue">const </span>
                                <span>promise</span>
                                <span class="fun-red">= </span>
                                <span>axios.</span>
                                <span class="fun-blue">get</span>
                                <span>(url);</span>
                            </span><br>
                        <span>&nbsp;&nbsp;&nbsp;&nbsp;
                                <span class="fun-red">return</span>
                                <span class="fun-blue">promiseOrCallback</span>
                                <span>(promise, cb);</span>
                            </span><br>
                        <span>}</span>
                        <a href="#" class="buttonTryApi" type="button" id="met7" onClick = "testBtn(id)" data-toggle="modal" data-target="#testFormApiModal">TRY</a>
                    </div><br>

                </div>

            </div>
        </div>

		
		<!-- Modal pop-up test api-->
		<div class="modal fade" id="testFormApiModal" tabindex="-1" role="dialog" aria-labelledby="testApiModalLabel" aria-hidden="true">
		   <div class="modal-dialog" role="document">
			  <div class="modal-content" id="modContent">
				 <div class="modal-header">
					<h5 class="modal-title" id="testApiModalLabel">Тестування API INTITA</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				 </div>
				 <div class="modal-body" id="modalQuestion">
					<form>
					   <div class="form-group">
						  <label for="inputApiLabel">Ваш токен/API key</label>
						  <input type="text" class="form-control" id="api-test" placeholder="Введіть свій токен" required>
						  <small id="tokenHelp" class="form-text text-muted"><a href="http://google.com" target="_blank">Для отримання інформації, що таке API key, натисніть сюди</a></small>
					   </div>
					   <div class="form-group" id="paramForm">
						  <label for="inputIdLabel" id="yourParam">Ваш ID</label>
						  <input type="text" class="form-control" id="param-test" placeholder="Введіть ID" required>
					   </div>
					   <button type="button" class="btn btn-primary"  onClick = "startTestApi()">Спробувати</button>
					</form>
				 </div>
				 <div class="modal-content" id="requestJsonModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" role="document">
					<div class="modal-body" role="document">
					   <pre><code id=jsonRequest></code></pre>
					   <div class="modal-footer row">
							<button type="button" class="btn btn-primary" id="backmodal" onclick="clickBack()">Повернутися назад</button>
							<button type="button" class="btn btn-primary" id="closemodal" data-dismiss="modal">Закрити</button>
						</div>
					</div>
				 </div>
			  </div>
		   </div>
		</div>
		<!-- Modal pop-up test api-->

    </div>

@endsection