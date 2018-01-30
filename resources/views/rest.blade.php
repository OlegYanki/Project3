@extends('layout.layout')

@section('content')

	<div class="container">
		<div class = "row">
		    <div class = "col-md-10"> 
		   		<h1>REST API INTITA</h1>
		   		<p>
		   			REST - це архітектурна схема взаємного обміну данними між сервером та клієнтом. Особливістю данного підходу являється те, що сервер не зберігає ніякої інформації про клієта. Топто кожен запит, що відправляється зі сторони клієта повинен містити паролі, або токени, що допоможуть ідентифікувати клієта на сервері і відправити потрібну інформацію.
		   		</p>
		    	
		    		<ul class = "accordion" >
		    			<li>
		    				<div class = "header-main card">
		    					Особиста інформація
		    				</div>
		    				<div class="body-main">
		    					
		    					Для отримання даного запиту потрібно до початкового адресу <strong>https://sso.intita.com/api/</strong> додати наступні запити. Схема комнонування URL стрічки буде однакова для всіх груп.
		    				
		    					<div class = "header-minor card bg-light">
		    						<b>/user</b>
		    					</div>
		    					<div class="body-minor">
		    						<p>
		    							Даний запит буде повертати вашу особисну інформацію, а саме призвіще та ім'я, id. Введіть свій власний токен, та подивіться який результат Ви можете отримати.
		    						</p>
		    						<div class="row for-form">
			    						<div class="col-md-4 position-right">
				    						<form id = "user">
											  	<div class="form-group">
											    	<label for="exampleInputPassword1">
											    		Токен
											    	</label>
											    	<input type="text" class="form-control token"  placeholder="token">
											  	</div>
												<button onclick="getInformation('user',[])" type="button" class="btn btn-primary">Спробувати</button>
											</form>
										</div>
										<div class="col-md-8 text-center">
											<p>Відповідь</p>
											<div class="forjson"><span></span></div>
										</div>
									</div>
		    					</div>
		    					<div class = "header-minor card bg-light">
		    						<b>/user/detailed</b>
		    					</div>
		    					<div class="body-minor">
		    						<p>
		    							Назва говорить сама за себе. Даний запит повертає досить масивний об'єм данних. Серед них ви можете знайти атресу, телефон, посилання на соціальні сайти та мейл, інформацію про тренера, та все те, що користувач заповнив на сайті в розділі профілю.
		    						</p>

		    						<div class="row for-form">
			    						<div class="col-md-4 position-right">
				    						<form id="user-detailed">
											  	<div class="form-group">
											    	<label for="exampleInputPassword1">
											    		Токен
											    	</label>
											    	<input type="text" class="form-control token"  placeholder="token">
											  	</div>										  	
											  	<button onclick="getInformation('user-detailed',[])" type="button" class="btn btn-primary">Спробувати</button>
											</form>
										</div>
										<div class="col-md-8 text-center">
											<p>Відповідь</p>
											<div class="forjson"><span></span></div>
										</div>
									</div>
		    					</div>
		    					<div class = "header-minor card bg-light">
		    						<b>/user/courses</b>
		    					</div>
		    					<div class="body-minor">
		    						<p>
		    							Даний запит та всі наступні мають вже конкретну нформацію. В цьому випадку Ви отримаєте назву курсу, що проходить клінт, та її id. 
		    						</p>

		    						<div class="row for-form">
			    						<div class="col-md-4 position-right">
				    						<form id="user-courses">
											  	<div class="form-group">
											    	<label for="exampleInputPassword1">
											    		Токен
											    	</label>
											    	<input type="text" class="form-control token"  placeholder="token">
											  	</div>										  	
											  	<button onclick="getInformation('user-courses',[])" type="button" class="btn btn-primary">Спробувати</button>
											</form>
										</div>
										<div class="col-md-8 text-center">
											<p>Відповідь</p>
											<div class="forjson"><span></span></div>
										</div>
									</div>
		    					</div>
		    					<div class = "header-minor card bg-light">
		    						<b>/user/modules</b>
		    					</div>
		    					<div class="body-minor">
		    						<p>
		    							Запит повертає модулі які є активними зі сторони клієнта. Тобто отриманий файл буде включати назви та id предметів, які проходить студент.
		    						</p>

		    						<div class="row for-form">
			    						<div class="col-md-4 position-right">
				    						<form id="user-modules">
											  	<div class="form-group">
											    	<label for="exampleInputPassword1">
											    		Токен
											    	</label>
											    	<input type="text" class="form-control token"  placeholder="token">
											  	</div>										  	
											  	<button onclick="getInformation('user-modules',[])" type="button" class="btn btn-primary">Спробувати</button>
											</form>
										</div>
										<div class="col-md-8 text-center">
											<p>Відповідь</p>
											<div class="forjson"><span></span></div>
										</div>
									</div>
		    					</div>	
		    				</div>
		    			</li>
		    			<li>
		    				<div class = "header-main card main">Курси</div>
		    				<div class="body-main">
		    					<p>
		    						Дана група запитів предназначення для отримання повної інфорації про Ваш курс та його деталізацію. Для отримання інформації через інші додатки, не забудьте використати  <b>https://sso.intita.com/api.</b>
								</p>
		    					<div class = "header-minor card bg-light">
		    						<b>/courses</b>
		    					</div>
		    					<div class="body-minor">
		    						<p>
		    							Початковий запит, що надає інформацію про курси, що проходить студент.
		    						</p>
		    						<div class="row for-form">
		    							<div class="col-md-4 position-right">
				    						<form id="courses">
											  	<div class="form-group">
											    	<label for="exampleInputPassword1">
											    		Токен
											    	</label>
											    	<input type="text" class="form-control token"  placeholder="token">
											  	</div>										  	
											  	<button onclick="getInformation('courses',[])" type="button" class="btn btn-primary">Спробувати</button>
											</form>
										</div>
										<div class="col-md-8 text-center">
											<p>Відповідь</p>
											<div class="forjson"><span></span></div>
										</div>
									</div>
		    					</div>


		    					<div class = "header-minor card bg-light">
		    						<b>course/{courseId}</b>
		    					</div>
		    					<div class="body-minor">
		    						<p>
		    							Даний запит дає можливість достуватись до певного курсу та отримувати інформацію про нього. Зверніть увагу, для перевірки запиту, додане ще одне поле, де потрібно вказати id курсу.
		    						</p>
		    						<div class="row for-form">
		    							<div class="col-md-4 position-right">
				    						<form id="course-courseId">
											  	<div class="form-group">
											    	<label for="exampleInputPassword1">
											    		Токен
											    	</label>
											    	<input type="text" class="form-control token"  placeholder="token">
											  	</div>
											  	<div class="form-group">
											    	<label for="exampleInputId">
											    		Айді
											    	</label>
											    	<input type="text" class="form-control courseId"  placeholder="Id">
											  	</div>	  	
											  	<button onclick="getInformation('course-courseId',['courseId'])" type="button" class="btn btn-primary">Спробувати</button>
											</form>
										</div>
										<div class="col-md-8 text-center">
											<p>Відповідь</p>
											<div class="forjson"><span></span></div>
										</div>
									</div>
		    					</div>
		    					<div class = "header-minor card bg-light">
		    						<b>course/{courseId}/tags</b>
		    					</div>
		    					<div class="body-minor">
		    						<P>
		    							Дана стрічка дозволить вам отримати теги, пов'язані із вашим курсом.
		    						</P>
		    						<div class="row for-form">
		    							<div class="col-md-4 position-right">
				    						<form id="course-courseId-tags">
											  	<div class="form-group">
											    	<label for="exampleInputPassword1">
											    		Токен
											    	</label>
											    	<input type="text" class="form-control token"  placeholder="token">
											  	</div>
											  	<div class="form-group">
											    	<label for="exampleInputId">
											    		Айді
											    	</label>
											    	<input type="text" class="form-control courseId"  placeholder="Id">
											  	</div>											  	
											  	<button onclick="getInformation('course-courseId-tags',['courseId'])" type="button" class="btn btn-primary">Спробувати</button>
											</form>
										</div>
										<div class="col-md-8 text-center">
											<p>Відповідь</p>
											<div class="forjson"><span></span></div>
										</div>
									</div>
		    					</div>
		    					<div class = "header-minor card bg-light">
		    						<b>/course/{courseId}/related/modules</b>
		    					</div>
		    					<div class="body-minor">
		    						<p>Запит повертає ті модулі, що безпосередньо пов'язані із даним курсом. </p>
		    						<div class="row for-form">
		    							<div class="col-md-4 position-right">
				    						<form id="course-courseId-related-modules">
											  	<div class="form-group">
											    	<label for="exampleInputPassword1">
											    		Токен
											    	</label>
											    	<input type="text" class="form-control token"  placeholder="token">
											  	</div>
											  	<div class="form-group">
											    	<label for="exampleInputId">
											    		Айді
											    	</label>
											    	<input type="text" class="form-control courseId"  placeholder="Id">
											  	</div>											  	
											  	<button onclick="getInformation('course-courseId-related-modules',['courseId'])" type="button" class="btn btn-primary">Спробувати</button>
											</form>
										</div>
										<div class="col-md-8 text-center">
											<p>Відповідь</p>
											<div class="forjson"><span></span></div>
										</div>
									</div>
		    					</div>
		    					<div class = "header-minor card bg-light">
		    						<b>/course/{courseId}/related/courses</b>
		    					</div>
		    					<div class="body-minor">
		    						<p>Запит повертає інформацію про курси, що перетинаються по предметам або пов'язані між собою по змісту.</p>
		    						<div class="row for-form">
		    							<div class="col-md-4 position-right">
				    						<form id="course-courseId-related-courses">
											  	<div class="form-group">
											    	<label for="exampleInputPassword1">
											    		Токен
											    	</label>
											    	<input type="text" class="form-control token"  placeholder="token">
											  	</div>
											  	<div class="form-group">
											    	<label for="exampleInputId">
											    		Айді
											    	</label>
											    	<input type="text" class="form-control courseId"  placeholder="Id">
											  	</div>											  	
											  	<button onclick="getInformation('course-courseId-related-courses',['courseId'])" type="button" class="btn btn-primary">Спробувати</button>
											</form>
										</div>
										<div class="col-md-8 text-center">
											<p>Відповідь</p>
											<div class="forjson"><span></span></div>
										</div>
									</div>
		    					</div>
		    					<div class = "header-minor card bg-light">
		    						<b>/course/{courseId}/modules</b>
		    					</div>
		    					<div class="body-minor">
		    						<p>Повертає id та назви предметів, що вивчаються в продовж проходження курсу.</p>
		    						<div class="row for-form">
		    							<div class="col-md-4 position-right">
				    						<form id="course-courseId-modules">											
											  	<div class="form-group">
											    	<label for="exampleInputPassword1">
											    		Токен
											    	</label>
											    	<input type="text" class="form-control token"  placeholder="token">
											  	</div>	
											  	<div class="form-group">
											    	<label for="exampleInputId">
											    		Айді
											    	</label>
											    	<input type="text" class="form-control courseId"  placeholder="Id">
											  	</div>										  	
											  	<button onclick="getInformation('course-courseId-modules',['courseId'])" type="button" class="btn btn-primary">Спробувати</button>
											</form>
										</div>
										<div class="col-md-8 text-center">
											<p>Відповідь</p>
											<div class="forjson"><span></span></div>
										</div>
									</div>

		    					</div>
		    					
		    				</div>
		    			</li>
		    			<li>
		    				<div class = "header-main card main">Модулі</div>
		    				<div class="body-main">
		    					<p>
		    						Дана група запитів предназначення для отримання повної інфорації про Ваші модулі та їх додаткову інформацію. Для отримання інформації через інші додатки, не забудьте використати  <b>https://sso.intita.com/api.</b>
								</p>
		    					<div class = "header-minor card bg-light">
		    						<b>/modules</b>
		    					</div>
		    					<div class="body-minor">
		    						<p>
		    							Початковий запит, що надає інформацію про модулі, що проходить студент.
		    						</p>
		    						<div class="row for-form">
		    							<div class="col-md-4 position-right">
				    						<form id="modules">											
											  	<div class="form-group">
											    	<label for="exampleInputPassword1">
											    		Токен
											    	</label>
											    	<input type="text" class="form-control token"  placeholder="token">
											  	</div>										  	
											  	<button onclick="getInformation('modules',[])" type="button" class="btn btn-primary">Спробувати</button>
											</form>
										</div>
										<div class="col-md-8 text-center">
											<p>Відповідь</p>
											<div class="forjson"><span></span></div>
										</div>
									</div>
		    					</div>


		    					<div class = "header-minor card bg-light">
		    						<b>/module/{moduleId}</b>
		    					</div>
		    					<div class="body-minor">
		    						<p>
		    							Даний запит дає можливість доступатись до певного модуля та отримувати інформацію про нього. Зверніть увагу, для перевірки запиту, додане ще одне поле, де потрібно вказати id модуля.
		    						</p>
		    						<div class="row for-form">
		    							<div class="col-md-4 position-right">
				    						<form id="module-moduleId">											
											  	<div class="form-group">
											    	<label for="exampleInputPassword1">
											    		Токен
											    	</label>
											    	<input type="text" class="form-control token"  placeholder="token">
											  	</div>
											  	<div class="form-group">
											    	<label for="exampleInputId">
											    		Айді
											    	</label>
											    	<input type="text" class="form-control moduleId"  placeholder="Id">
											  	</div>	  	
											  	<button onclick="getInformation('module-moduleId',['moduleId'])" type="button" class="btn btn-primary">Спробувати</button>
											</form>
										</div>
										<div class="col-md-8 text-center">
											<p>Відповідь</p>
											<div class="forjson"><span></span></div>
										</div>
									</div>
		    					</div>
		    					<div class = "header-minor card bg-light">
		    						<b>/module/{moduleId}/tags</b>
		    					</div>
		    					<div class="body-minor">
		    						<P>
		    							Дана стрічка дозволить вам отримати теги, пов'язані із модулем, що ви вказали за допомогою id.
		    						</P>
		    						<div class="row for-form">
		    							<div class="col-md-4 position-right">
				    						<form id="module-moduleId-tags">
											  	<div class="form-group">
											    	<label for="exampleInputPassword1">
											    		Токен
											    	</label>
											    	<input type="text" class="form-control token"  placeholder="token">
											  	</div>
											  	<div class="form-group">
											    	<label for="exampleInputId">
											    		Айді
											    	</label>
											    	<input type="text" class="form-control moduleId"  placeholder="Id">
											  	</div>											  	
											  	<button onclick="getInformation('module-moduleId-tags',['moduleId'])" type="button" class="btn btn-primary">Спробувати</button>
											</form>
										</div>
										<div class="col-md-8 text-center">
											<p>Відповідь</p>
											<div class="forjson"><span></span></div>
										</div>
									</div>
		    					</div>
		    					<div class = "header-minor card bg-light">
		    						<b>/module/{moduleId}/related/modules</b>
		    					</div>
		    					<div class="body-minor">
		    						<p>Запит повертає ті модулі, що безпосередньо пов'язані із даним модулем. </p>
		    						<div class="row for-form">
		    							<div class="col-md-4 position-right">
				    						<form id="module-moduleId-related-modules">
											  	<div class="form-group">
											    	<label for="exampleInputPassword1">
											    		Токен
											    	</label>
											    	<input type="text" class="form-control token"  placeholder="token">
											  	</div>
											  	<div class="form-group">
											    	<label for="exampleInputId">
											    		Айді
											    	</label>
											    	<input type="text" class="form-control moduleId"  placeholder="Id">
											  	</div>											  	
											  	<button onclick="getInformation('module-moduleId-related-modules',['moduleId'])" type="button" class="btn btn-primary">Спробувати</button>
											</form>
										</div>
										<div class="col-md-8 text-center">
											<p>Відповідь</p>
											<div class="forjson"><span></span></div>
										</div>
									</div>
		    					</div>
		    					<div class = "header-minor card bg-light">
		    						<b>/module/{moduleId}/related/courses</b>
		    					</div>
		    					<div class="body-minor">
		    						<p>Запит повертає інформацію про курси, що перетинаються по предметам або пов'язані із даним модулем.</p>
		    						<div class="row for-form">
		    							<div class="col-md-4 position-right">
				    						<form id="module-moduleId-related-courses">
											  	<div class="form-group">
											    	<label for="exampleInputPassword1">
											    		Токен
											    	</label>
											    	<input type="text" class="form-control token"  placeholder="token">
											  	</div>
											  	<div class="form-group">
											    	<label for="exampleInputId">
											    		Айді
											    	</label>
											    	<input type="text" class="form-control moduleId"  placeholder="Id">
											  	</div>											  	
											  	<button onclick="getInformation('module-moduleId-related-courses',['moduleId'])" type="button" class="btn btn-primary">Спробувати</button>
											</form>
										</div>
										<div class="col-md-8 text-center">
											<p>Відповідь</p>
											<div class="forjson"><span></span></div>
										</div>
									</div>
		    					</div>
		    					<div class = "header-minor card bg-light">
		    						<b>/module/{moduleId}/lectures</b>
		    					</div>
		    					<div class="body-minor">
		    						<p>Повертає назви лекцій, що проходить студент при вивченні даного модуля.</p>
		    						<div class="row for-form">
		    							<div class="col-md-4 position-right">
				    						<form id="module-moduleId-lectures">
											  	<div class="form-group">
											    	<label for="exampleInputPassword1">
											    		Токен
											    	</label>
											    	<input type="text" class="form-control token"  placeholder="token">
											  	</div>	
											  	<div class="form-group">
											    	<label for="exampleInputId">
											    		Айді
											    	</label>
											    	<input type="text" class="form-control moduleId"  placeholder="Id">
											  	</div>										  	
											  	<button onclick="getInformation('module-moduleId-lectures',['moduleId'])" type="button" class="btn btn-primary">Спробувати</button>
											</form>
										</div>
										<div class="col-md-8 text-center">
											<p>Відповідь</p>
											<div class="forjson"><span></span></div>
										</div>
									</div>

		    					</div>
		    					
		    				</div>
		    			</li>
		    			
		    			<li>
		    				<div class = "header-main card main">Лекції</div>
		    				<div class="body-main">
		    					<p>
		    						Ця група запитів дозволить більш детально розглянути лекційний матеріал. Базовою основою запиту залишається та сама стрічка<b>https://sso.intita.com/api.</b>
								</p>
		    					<div class = "header-minor card bg-light">
		    						<b>/lecture/{lectureId}</b>
		    					</div>
		    					<div class="body-minor">
		    						<p>
		    							Початковий запит, що надає інформацію про лекцію.
		    						</p>
		    						<div class="row for-form">
		    							<div class="col-md-4 position-right">
				    						<form id="lecture-lectureId">
											  	<div class="form-group">
											    	<label for="exampleInputPassword1">
											    		Токен
											    	</label>
											    	<input type="text" class="form-control token"  placeholder="token">
											  	</div>
											  	<div class="form-group">
											    	<label for="exampleInputId">
											    		Айді
											    	</label>
											    	<input type="text" class="form-control lectureId"  placeholder="Id">
											  	</div>											  	
											  	<button onclick="getInformation('lecture-lectureId',['lectureId'])" type="button" class="btn btn-primary">Спробувати</button>
											</form>
										</div>
										<div class="col-md-8 text-center">
											<p>Відповідь</p>
											<div class="forjson"><span></span></div>
										</div>
									</div>
		    					</div>


		    					<div class = "header-minor card bg-light">
		    						<b>lecture/{lectureId}/pages</b>
		    					</div>
		    					<div class="body-minor">
		    						<p>
		    							Не працює
		    						</p>
		    						<div class="row for-form">
		    							<div class="col-md-4 position-right">
				    						<form id="lecture-lectureId-pages">
											  	<div class="form-group">
											    	<label for="exampleInputPassword1">
											    		Токен
											    	</label>
											    	<input type="text" class="form-control token"  placeholder="token">
											  	</div>
											  	<div class="form-group">
											    	<label for="exampleInputId">
											    		Айді
											    	</label>
											    	<input type="text" class="form-control lectureId"  placeholder="Id">
											  	</div>	  	
											  	<button onclick="getInformation('lecture-lectureId-pages',['lectureId'])" type="button" class="btn btn-primary">Спробувати</button>
											</form>
										</div>
										<div class="col-md-8 text-center">
											<p>Відповідь</p>
											<div class="forjson"><span></span></div>
										</div>
									</div>
		    					</div>
		    					<div class = "header-minor card bg-light">
		    						<b>/lecture/{lectureId}/page/{pageId}</b>
		    					</div>
		    					<div class="body-minor">
		    						<P>
		    							Дана стрічка дозволить вам отримати теги, пов'язані із модулем, що ви вказали за допомогою id.
		    						</P>
		    						<div class="row for-form">
		    							<div class="col-md-4 position-right">
				    						<form id="lecture-lectureId-page-pageId">
											  	<div class="form-group">
											    	<label for="exampleInputPassword1">
											    		Токен
											    	</label>
											    	<input type="text" class="form-control token"  placeholder="token">
											  	</div>
											  	<div class="form-group">
											    	<label for="exampleInputId">
											    		Айді лекції
											    	</label>
											    	<input type="text" class="form-control lectureId"  placeholder="lecture Id">
											  	</div>
											  	<div class="form-group">
											    	<label for="exampleInputId">
											    		Айді сторінки
											    	</label>
											    	<input type="text" class="form-control pageId"  placeholder="page Id">
											  	</div>
											  	<button onclick="getInformation('lecture-lectureId-page-pageId',['lectureId','pageId'])" type="button" class="btn btn-primary">Спробувати</button>
											</form>
										</div>
										<div class="col-md-8 text-center">
											<p>Відповідь</p>
											<div class="forjson"><span></span></div>
										</div>
									</div>
		    					</div>
		    					<div class = "header-minor card bg-light">
		    						<b>/lecture/{lectureId}/page/{pageId}/text</b>
		    					</div>
		    					<div class="body-minor">
		    						<p>
		    							Не працює
		    						</p>
		    						<div class="row for-form">
		    							<div class="col-md-4 position-right">
				    						<form id="lecture-lectureId-page-pageId-text">
											  	<div class="form-group">
											    	<label for="exampleInputPassword1">
											    		Токен
											    	</label>
											    	<input type="text" class="form-control token"  placeholder="token">
											  	</div>
											  	<div class="form-group">
											    	<label for="exampleInputId">
											    		Айді лекції
											    	</label>
											    	<input type="text" class="form-control lectureId" placeholder="lecture Id">
											  	</div>
											  	<div class="form-group">
											    	<label for="exampleInputId">
											    		Айді сторінки
											    	</label>
											    	<input type="text" class="form-control pageId" placeholder="page Id">
											  	</div>													  	
											  	<button onclick="getInformation('lecture-lectureId-page-pageId-text',['lectureId','pageId'])" type="button" class="btn btn-primary">Спробувати</button>
											</form>
										</div>
										<div class="col-md-8 text-center">
											<p>Відповідь</p>
											<div class="forjson"><span></span></div>
										</div>
									</div>
		    					</div>
		    					<div class = "header-minor card bg-light">
		    						<b>/lecture/{lectureId}/page/{pageId}/quiz</b>
		    					</div>
		    					<div class="body-minor">
		    						<p>
		    						Не працює.</p>
		    						<div class="row for-form">
		    							<div class="col-md-4 position-right">
				    						<form id="lecture-lectureId-page-pageId-quiz">
											  	<div class="form-group">
											    	<label for="exampleInputPassword1">
											    		Токен
											    	</label>
											    	<input type="text" class="form-control token"  placeholder="token">
											  	</div>
											  	<div class="form-group">
											    	<label for="exampleInputId">
											    		Айді лекції
											    	</label>
											    	<input type="text" class="form-control lectureId" placeholder="lecture Id">
											  	</div>
											  	<div class="form-group">
											    	<label for="exampleInputId">
											    		Айді сторінки
											    	</label>
											    	<input type="text" class="form-control pageId" placeholder="page Id">
											  	</div>										  	
											  	<button onclick="getInformation('lecture-lectureId-page-pageId-quiz',['lectureId','pageId'])" type="button" class="btn btn-primary">Спробувати</button>
											</form>
										</div>
										<div class="col-md-8 text-center">
											<p>Відповідь</p>
											<div class="forjson"><span></span></div>
										</div>
									</div>
		    					</div>
		    					<div class = "header-minor card bg-light">
		    						<b>/lecture/{lectureId}/page/{pageId}/video</b>
		    					</div>
		    					<div class="body-minor">
		    						<p>
		    							Не працює.
		    						</p>
		    						<div class="row for-form">
		    							<div class="col-md-4 position-right">
				    						<form id="lecture-lectureId-page-pageId-video">
											  	<div class="form-group">
											    	<label for="exampleInputPassword1">
											    		Токен
											    	</label>
											    	<input type="text" class="form-control token"  placeholder="token">
											  	</div>	
											  	<div class="form-group">
											    	<label for="exampleInputId">
											    		Айді лекції
											    	</label>
											    	<input type="text" class="form-control lectureId" placeholder="lecture Id">
											  	</div>
											  	<div class="form-group">
											    	<label for="exampleInputId">
											    		Айді сторінки
											    	</label>
											    	<input type="text" class="form-control pageId" placeholder="page Id">
											  	</div>									  	
											  	<button onclick="getInformation('lecture-lectureId-page-pageId-video',['lectureId','pageId'])" type="button" class="btn btn-primary">Спробувати</button>
											</form>
										</div>
										<div class="col-md-8 text-center">
											<p>Відповідь</p>
											<div class="forjson"><span></span></div>
										</div>
									</div>

		    					</div>
		    					
		    				</div>
		    			</li>
		    			<li>
		    				<div class = "header-main card main">Денне</div>
		    				<div class="body-main">
		    					<p>
		    						Група запитів працює із зсписками груп, що навчались або навчаються на даний момент. Базовий запит залишається однаковим.  <b>https://sso.intita.com/api.</b>
								</p>
		    					<div class = "header-minor card bg-light">
		    						<b>/offline/groups</b>
		    					</div>
		    					<div class="body-minor">
		    						<p>
		    							Повертає список груп та їх id, що допоможе долучатись до груп в наступних запитах.
		    						</p>
		    						<div class="row for-form">
		    							<div class="col-md-4 position-right">
				    						<form id="offline-groups">
											  	<div class="form-group">
											    	<label for="exampleInputPassword1">
											    		Токен
											    	</label>
											    	<input type="text" class="form-control token"  placeholder="token">
											  	</div>										  	
											  	<button onclick="getInformation('offline-groups',[])" type="button" class="btn btn-primary">Спробувати</button>
											</form>
										</div>
										<div class="col-md-8 text-center">
											<p>Відповідь</p>
											<div class="forjson"><span></span></div>
										</div>
									</div>
		    					</div>


		    					<div class = "header-minor card bg-light">
		    						<b>/offline/group/{groupId}</b>
		    					</div>
		    					<div class="body-minor">
		    						<p>
		    							Повертає детальну інформацію про те, коли група була створена, місто де навчаються, спеціальність та id створених чатів на сайті.
		    						</p>
		    						<div class="row for-form">
		    							<div class="col-md-4 position-right">
				    						<form id="offline-group-groupId">											
											  	<div class="form-group">
											    	<label for="exampleInputPassword1">
											    		Токен
											    	</label>
											    	<input type="text" class="form-control token"  placeholder="token">
											  	</div>
											  	<div class="form-group">
											    	<label for="exampleInputId">
											    		Айді
											    	</label>
											    	<input type="text" class="form-control groupId"  placeholder="Id">
											  	</div>	  	
											  	<button onclick="getInformation('offline-group-groupId',['groupId'])" type="button" class="btn btn-primary">Спробувати</button>
											</form>
										</div>
										<div class="col-md-8 text-center">
											<p>Відповідь</p>
											<div class="forjson"><span></span></div>
										</div>
									</div>
		    					</div>
		    					<div class = "header-minor card bg-light">
		    						<b>/offline/group/{groupId}/subgroups</b>
		    					</div>
		    					<div class="body-minor">
		    						<P>
		    							В ході навчання групи поділяються на підгрупи. Запит повертає назви підгруп.
		    						</P>
		    						<div class="row for-form">
		    							<div class="col-md-4 position-right">
				    						<form id="offline-group-groupId-subgroups">											
											  	<div class="form-group">
											    	<label for="exampleInputPassword1">
											    		Токен
											    	</label>
											    	<input type="text" class="form-control token"  placeholder="token">
											  	</div>
											  	<div class="form-group">
											    	<label for="exampleInputId">
											    		Айді
											    	</label>
											    	<input type="text" class="form-control groupId"  placeholder="Id">
											  	</div>
												<button onclick="getInformation('offline-group-groupId-subgroups',['groupId'])" type="button" class="btn btn-primary">Спробувати</button>
											</form>
										</div>
										<div class="col-md-8 text-center">
											<p>Відповідь</p>
											<div class="forjson"><span></span></div>
										</div>
									</div>
		    					</div>
		    					<div class = "header-minor card bg-light">
		    						<b>/offline/group/{groupId}/modules</b>
		    					</div>
		    					<div class="body-minor">
		    						<p>
		    						Запит повертає ті модулі, що безпосередньо проходить група в період навчання. </p>
		    						<div class="row for-form">
		    							<div class="col-md-4 position-right">
				    						<form id="offline-group-groupId-modules">											
											  	<div class="form-group">
											    	<label for="exampleInputPassword1">
											    		Токен
											    	</label>
											    	<input type="text" class="form-control token"  placeholder="token">
											  	</div>
											  	<div class="form-group">
											    	<label for="exampleInputId">
											    		Айді
											    	</label>
											    	<input type="text" class="form-control groupId"  placeholder="Id">
											  	</div>											  	
											  	<button onclick="getInformation('offline-group-groupId-modules',['groupId'])" type="button" class="btn btn-primary">Спробувати</button>
											</form>
										</div>
										<div class="col-md-8 text-center">
											<p>Відповідь</p>
											<div class="forjson"><span></span></div>
										</div>
									</div>
		    					</div>
		    					<div class = "header-minor card bg-light">
		    						<b>/offline/group/{groupId}/courses</b>
		    					</div>
		    					<div class="body-minor">
		    						<p>Запит повертає інформацію про курс, що проходить чи проходила дана група.</p>
		    						<div class="row for-form">
		    							<div class="col-md-4 position-right">
				    						<form id="offline-group-groupId-courses">											
											  	<div class="form-group">
											    	<label for="exampleInputPassword1">
											    		Токен
											    	</label>
											    	<input type="text" class="form-control token"  placeholder="token">
											  	</div>
											  	<div class="form-group">
											    	<label for="exampleInputId">
											    		Айді
											    	</label>
											    	<input type="text" class="form-control groupId"  placeholder="Id">
											  	</div>											  	
											  	<button onclick="getInformation('offline-group-groupId-courses',['groupId'])" type="button" class="btn btn-primary">Спробувати</button>
											</form>
										</div>
										<div class="col-md-8 text-center">
											<p>Відповідь</p>
											<div class="forjson"><span></span></div>
										</div>
									</div>
		    					</div>
		    					<div class = "header-minor card bg-light">
		    						<b>/offline/group/{groupId}/students</b>
		    					</div>
		    					<div class="body-minor">
		    						<p>
		    							Список студентів та їх id можна отримати за допомогою даного запиту.
		    						</p>
		    						<div class="row for-form">
		    							<div class="col-md-4 position-right">
				    						<form id="offline-group-groupId-students">
											  	<div class="form-group">
											    	<label for="exampleInputPassword1">
											    		Токен
											    	</label>
											    	<input type="text" class="form-control token"  placeholder="token">
											  	</div>	
											  	<div class="form-group">
											    	<label for="exampleInputId">
											    		Айді
											    	</label>
											    	<input type="text" class="form-control groupId"  placeholder="Id">
											  	</div>										  	
											  	<button onclick="getInformation('offline-group-groupId-students',['groupId'])" type="button" class="btn btn-primary">Спробувати</button>
											</form>
										</div>
										<div class="col-md-8 text-center">
											<p>Відповідь</p>
											<div class="forjson"><span></span></div>
										</div>
									</div>

		    					</div>
		    					<div class = "header-minor card bg-light">
		    						<b>/offline/subgroup/{subgroupId}</b>
		    					</div>
		    					<div class="body-minor">
		    						<p>
		    							Детальна інформація з підгруп, їх розклад дата створення та багато іншого, доступна за даним запитом.
		    						</p>
		    						<div class="row for-form">
		    							<div class="col-md-4 position-right">
				    						<form id="offline-subgroup-subgroupId">
											  	<div class="form-group">
											    	<label for="exampleInputPassword1">
											    		Токен
											    	</label>
											    	<input type="text" class="form-control token"  placeholder="token">
											  	</div>	
											  	<div class="form-group">
											    	<label for="exampleInputId">
											    		Айді
											    	</label>
											    	<input type="text" class="form-control subgroupId"  placeholder="Id">
											  	</div>										  	
											  	<button onclick="getInformation('offline-subgroup-subgroupId',['subgroupId'])" type="button" class="btn btn-primary">Спробувати</button>
											</form>
										</div>
										<div class="col-md-8 text-center">
											<p>Відповідь</p>
											<div class="forjson"><span></span></div>
										</div>
									</div>

		    					</div>
		    					<div class = "header-minor card bg-light">
		    						<b>/offline/subgroup/{subgroupId}/students</b>
		    					</div>
		    					<div class="body-minor">
		    						<p>
		    							Даний запит повертає список студентів підгрупи.
		    						</p>
		    						<div class="row for-form">
		    							<div class="col-md-4 position-right">
				    						<form id="offline-subgroup-subgroupId-students">
											  	<div class="form-group">
											    	<label for="exampleInputPassword1">
											    		Токен
											    	</label>
											    	<input type="text" class="form-control token"  placeholder="token">
											  	</div>	
											  	<div class="form-group">
											    	<label for="exampleInputId">
											    		Айді
											    	</label>
											    	<input type="text" class="form-control subgroupId"  placeholder="Id">
											  	</div>										  	
											  	<button onclick="getInformation('offline-subgroup-subgroupId-students',['subgroupId'])" type="button" class="btn btn-primary">Спробувати</button>
											</form>
										</div>
										<div class="col-md-8 text-center">
											<p>Відповідь</p>
											<div class="forjson"><span></span></div>
										</div>
									</div>

		    					</div>
		    					
		    				</div>
		    			</li>
		    			<li>
		    				<div class = "header-main card main">
		    					Теги
		    				</div>
		    				<div class="body-main">
		    					<p>
		    						Для швидкого пошуку інфомації частіше всього застосовують теги. Запити, як і раніше базуються на даному адресі  <b>https://sso.intita.com/api.</b>
								</p>
		    					<div class = "header-minor card bg-light">
		    						<b>/tags</b>
		    					</div>
		    					<div class="body-minor">
		    						<p>
		    							Загальний список тегів, для пошуку, а також їх id.
		    						</p>
		    						<div class="row for-form">
		    							<div class="col-md-4 position-right">
				    						<form id="tags">
											  	<div class="form-group">
											    	<label for="exampleInputPassword1">
											    		Токен
											    	</label>
											    	<input type="text" class="form-control token"  placeholder="token">
											  	</div>										  	
											  	<button onclick="getInformation('tags',[])" type="button" class="btn btn-primary">Спробувати</button>
											</form>
										</div>
										<div class="col-md-8 text-center">
											<p>Відповідь</p>
											<div class="forjson"><span></span></div>
										</div>
									</div>
		    					</div>


		    					<div class = "header-minor card bg-light">
		    						<b>/tag/{tagId}/modules</b>
		    					</div>
		    					<div class="body-minor">
		    						<p>
		    							Повертає детальну інформацію про модуль, на який даний тег вказує.
		    						</p>
		    						<div class="row for-form">
		    							<div class="col-md-4 position-right">
				    						<form id="tag-tagId-modules">
											  	<div class="form-group">
											    	<label for="exampleInputPassword1">
											    		Токен
											    	</label>
											    	<input type="text" class="form-control token"  placeholder="token">
											  	</div>
											  	<div class="form-group">
											    	<label for="exampleInputId">
											    		Айді
											    	</label>
											    	<input type="text" class="form-control tagId"  placeholder="Id">
											  	</div>	  	
											  	<button onclick="getInformation('tag-tagId-modules',['tagId'])" type="button" class="btn btn-primary">Спробувати</button>
											</form>
										</div>
										<div class="col-md-8 text-center">
											<p>Відповідь</p>
											<div class="forjson"><span></span></div>
										</div>
									</div>
		    					</div>
		    					<div class = "header-minor card bg-light">
		    						<b>/tag/{tagId}/courses</b>
		    					</div>
		    					<div class="body-minor">
		    						<P>
		    							Аналогічно із попереднім, повертає необхідну інформацію, щодо курсу до якого даний тег відноситься.
		    						</P>
		    						<div class="row for-form">
		    							<div class="col-md-4 position-right">
				    						<form id="tag-tagId-courses">
											  	<div class="form-group">
											    	<label for="exampleInputPassword1">
											    		Токен
											    	</label>
											    	<input type="text" class="form-control token"  placeholder="token">
											  	</div>
											  	<div class="form-group">
											    	<label for="exampleInputId">
											    		Айді
											    	</label>
											    	<input type="text" class="form-control tagId"  placeholder="Id">
											  	</div>											  	
											  	<button onclick="getInformation('tag-tagId-courses',['tagId'])" type="button" class="btn btn-primary">Спробувати</button>
											</form>
										</div>
										<div class="col-md-8 text-center">
											<p>Відповідь</p>
											<div class="forjson"><span></span></div>
										</div>
									</div>
		    					</div>					
		    				</div>
		    			</li>
		    		</ul>
		    		<p>
		    			От і все. Iнформацію, що розміщує про вас, ваш курс, модулі, групу можна знайти за допомогою цих запитів. Тепер Ви можете доступитися до великою бази данних, за допомогою REST API.
		    		</p>
		    		<br>
		    </div>
		</div>
	</div>
	<script type="text/javascript" src = "js/restJs.js"></script>

	<div id="modalServeError" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Ошибка!</h4>
				</div>
				<div class="modal-body">
					<span>Проверьте введенные данные и убедитесь в их корректности.</span>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
				</div>
			</div>
		</div>
	</div>

	<div id="modalEmptyField" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Ошибка!</h4>
				</div>
				<div class="modal-body">
					<span>Все поля должны быть заполнены</span>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal" accesskey="a">Закрыть</button>
				</div>
			</div>
		</div>
	</div>
@endsection
