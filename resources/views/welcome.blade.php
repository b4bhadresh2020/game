<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
        <meta name="HandheldFriendly" content="true"/>
        <meta name="apple-mobile-web-app-capable" content="yes"/>
		<title>Esfaria</title>
        <link rel="stylesheet" media="screen" href="{{asset('assets/css/main.css')}}">
	</head>

	<body class="body" data-step="1" data-sequence="1">
		<main class="page-bg">
			<span class="section-background section-background-1"></span>
			<span class="section-background section-background-2"></span>
			<span class="location-background"></span>
			
			<div class="parent-sections">
				<section class="section section-1 rounded-section full-page-register to-column align-to-middle align-to-center">
					<div class="container-gridded">
						<div class="container">
							<div class="row">
								<div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
								<div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
								<div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
								<div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
								<div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
								<div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
								<div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
								<div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
								<div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
								<div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
								<div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
								<div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
							</div>
						</div>
					</div>
					<div class="container">
						<div class="row ">
							<div class="col-12 col-sm-12 col-md-10 col-lg-8 col-xl-6 special-col">
								<div class="rounded-content">
									<div class="rounded-content-inner">
										<div class="register-content">
											<div class="form-logo">
												<div class="title">Welcome to</div>
												<a href="#"><img src="{{asset('assets/image/form-logo.png')}}" alt=""></a>
											</div>
											<form id="loginForm" method="POST" action="{{ route('login') }}">
												@csrf
												<div class="row">
													<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
														<div class="form-line">
															<input type="email" class="form-item @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"
																placeholder="*Email or Password">
															 @error('email')
																<span class="invalid-feedback" role="alert">
																	<strong class="text-red">{{ $message }}</strong>
																</span>
															@enderror
														</div>
													</div>
													<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
														<div class="form-line">
															<input type="password" class="form-item @error('password') is-invalid @enderror" name="password" placeholder="*Password">
															@error('password')
																<span class="invalid-feedback" role="alert">
																	<strong class="text-red">{{ $message }}</strong>
																</span>
															@enderror
														</div>
													</div>
													<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
														<div class="form-line form-line-submit buttons">
															<button class="btn" type="submit" value="Submit">Log In <span
																	class="icon icomoon icon-arrow-right4"></span></button>
														</div>
													</div>
													<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
														<p class="account-question">Don‘t have an account? <a href="#" class="link go-to-register">Register</a>!</p>
													</div>
													<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
														@if($errors->has('birth_day_step') || $errors->has('birth_month_step') || $errors->has('year') || $errors->has('first_name') || $errors->has('last_name') || $errors->has('phone') || $errors->has('user_email') || $errors->has('user_password'))
															<p class="text-red">Registration detail is invalid.</p>
														@endif
													</div>
												</div>
											</form>
										</div>
										
										<div class="ecode-content">
											<div class="form-logo">
												<div class="title">Welcome to</div>
												<a href="#"><img src="{{asset('assets/image/form-logo.png')}}" alt=""></a>
											</div>
											
											<form id="form1" action="">
												<div class="row">
													<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
														<div class="form-title">Passion live</div>
													</div>
													<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
														<div class="form-line">
															<input type="text" class="form-item" name="email_password" placeholder="*Email or Password">
															<div class="enter-code">Get started by entering your ecode</div>
														</div>
													</div>
													<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
														<div class="form-line form-line-submit buttons">
															<a href="index.htm" class="btn btn-yellow go-now" data-sound-click="sonidoB">GO NOW</a>
															<a href="#" class="btn btn-yellow">REQUEST</a>
														</div>
													</div>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

				<section class="section section-2 steps-section full-page to-column align-to-middle">
					<div class="container-gridded">
						<div class="container">
							<div class="row">
								<div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
								<div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
								<div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
								<div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
								<div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
								<div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
								<div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
								<div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
								<div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
								<div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
								<div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
								<div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
							</div>
						</div>
					</div>

					<div class="container">
						<div class="row steps-section-content no-margin-nested-row">
							<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
								<div class="row">
									<div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3">
										<div class="logo"><img src="{{asset('assets/image/logo.png')}}" alt=""></div>
									</div>
								
									<div class="col-12 col-sm-12 col-md-12 col-lg-9 col-xl-9"></div>
								</div>
							</div>

							<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
								<div class="row tablete-overflow">
									<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-3">
										<div class="controls-steps">
											<div class="title">
												<div class="title-content gender-title">Click your <br>own Gender</div>
												<div class="title-content id-title">Choose your <br>Identification</div>
												<div class="title-content location-title">Enter your <br>Location</div>
												<div class="title-content birth-title">Enter your <br>Birth Date</div>
												<div class="title-content info-title">Enter your <br>Personal Info</div>
											</div>
											<div class="arrows">
												<div class="arrow-control prev-arrow" data-sound-hover="Prev-Next">
													<span class="icon icomoon icon-arrow-left4"></span>
												</div>

												<div class="arrow-control next-arrow" data-sound-hover="Prev-Next">
													<span class="icon icomoon icon-arrow-right4"></span>
												</div>
											</div>
										</div>
									</div>
									
									<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-9">
										<form id="registerForm" method="POST" action="{{ route('register') }}">
											@csrf
											<div class="group-of-steps">
												<div class="group-of-steps-content">
													<div class="info-step" data-step="5">
														<div class="info-step-form">
															<div class="info-step-form-content">
																<div class="row">
																	<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
																		<div class="form-line">
																			<input type="text" class="form-item" name="first_name" value="{{old('first_name')}}" placeholder="*First Name">
																			@if ($errors->has('first_name'))
																				<p class="text-red">{{ $errors->first('first_name') }}</p>
																			@endif
																		</div>
																	</div>
																	<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
																		<div class="form-line">
																			<input type="text" class="form-item" name="last_name" value="{{old('last_name')}}" placeholder="*Last Name">
																			@if ($errors->has('last_name'))
																				<p class="text-red">{{ $errors->first('last_name') }}</p>
																			@endif
																		</div>
																	</div>
															
																	<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
																		<div class="form-line">
																			<input type="email" class="form-item" name="user_email" value="{{old('user_email')}}" placeholder="Email">
																			@if ($errors->has('user_email'))
																				<p class="text-red">{{ $errors->first('user_email') }}</p>
																			@endif
																		</div>
																	</div>
																	<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
																		<div class="form-line">
																			<input type="tel" class="form-item" name="phone" value="{{old('phone')}}" placeholder="*Parent‘s Phone or E-mail">
																			@if ($errors->has('phone'))
																				<p class="text-red">{{ $errors->first('phone') }}</p>
																			@endif
																		</div>
																	</div>
																	<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
																		<div class="form-line form-line-with-icon">
																			<input type="password" class="form-item form-item-password" name="user_password" value="*Password">
																			<span class="icon icomoon icon-eye2 see-password"></span>
																			@if ($errors->has('user_password'))
																				<p class="text-red">{{ $errors->first('user_password') }}</p>
																			@endif
																		</div>
																	</div>
																	<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
																		<div class="form-line form-line-radio">
																			<label>
																				<input type="radio" name="terms_conditions" value="I agree to the Terms and Conditions.">
																				<span class="radio"></span>	
																				<span class="text">I agree to the Terms and Conditions.</span>
																			</label>
																		</div>
																	</div>
																	<!-- <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
																		<div class="form-line form-line-checkbox">
																			<label>
																				<input type="checkbox" name="privacy" value="I agree with that!">
																				<span class="checkbox"></span>
																				<span class="text">I agree with that!</span>
																			</label>
																		</div>
																	</div> -->


																	<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
																		<div class="form-line form-line-submit">
																			<button class="btn" type="submit" value="Submit" data-sound-click="sonidoB">Finish <span class="icon icomoon icon-arrow-right4"></span></button>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>

													<div class="birth-step" data-step="4">
														@if ($errors->has('birth_day_step') || $errors->has('birth_month_step') || $errors->has('year'))
															<div class="birthday-error">
																<p class="text-red">{{ $errors->first('birth_day_step') }}</p>
																<p class="text-red">{{ $errors->first('birth_month_step') }}</p>
																<p class="text-red">{{ $errors->first('year') }}</p>
															</div>
														@endif
														<div class="birth-step-element birth-day">
															<div class="title">Day</div>
															<div class="birth-selection">
																<input type="text" name="birth_day_step" value="{{old('birth_day_step')}}" placeholder="DD">
															</div>
															<div class="required-field">*Required</div>
														</div>

														<div class="birth-step-element birth-month">
															<div class="title">Month</div>
															<div class="birth-selection">
																<input type="text" name="birth_month_step" value="{{old('birth_month_step')}}" placeholder="MM">
															</div>
															<div class="required-field">*Required</div>
														</div>

														<div class="birth-step-element birth-year">
															<div class="title">Year</div>
															<div class="birth-selection">
																<input type="text" name="year" value="{{old('year')}}"  placeholder="YYYY">
															</div>
															<div class="required-field">*This field is required</div>
														</div>
													</div>

													<div class="location-step" data-step="3">
														<div class="location-step-element">
															<div class="title">Country</div>
															<div class="selection">
																<select name="country" data-placeholder="Several Options">
																	<option value=""></option>
																	<option value="option1" {{old("country") == "option1" ? 'selected' : ''}}>Option 1</option>
																	<option value="option2" {{old("country") == "option2" ? 'selected' : ''}}>Option 2</option>
																	<option value="option3" {{old("country") == "option3" ? 'selected' : ''}}>Option 3</option>
																	<option value="option4" {{old("country") == "option4" ? 'selected' : ''}}>Option 4</option>
																</select>
															</div>
														</div>

														<div class="location-step-element">
															<div class="title">City</div>
															<div class="selection">
																<select name="city" data-placeholder="Several Options">
																	<option value=""></option>
																	<option value="option1" {{old("city") == "option1" ? 'selected' : ''}}>Option 1</option>
																	<option value="option2" {{old("city") == "option2" ? 'selected' : ''}}>Option 2</option>
																	<option value="option3" {{old("city") == "option3" ? 'selected' : ''}}>Option 3</option>
																	<option value="option4" {{old("city") == "option4" ? 'selected' : ''}}>Option 4</option>
																</select>
															</div>
														</div>

														<div class="location-step-element">
															<div class="title">Postal Code</div>
															<div class="selection">
																<select name="postalcode" data-placeholder="Several Options">
																	<option value=""></option>
																	<option value="option1" {{old("postalcode") == "option1" ? 'selected' : ''}}>Option 1</option>
																	<option value="option2" {{old("postalcode") == "option2" ? 'selected' : ''}}>Option 2</option>
																	<option value="option3" {{old("postalcode") == "option3" ? 'selected' : ''}}>Option 3</option>
																	<option value="option4" {{old("postalcode") == "option4" ? 'selected' : ''}}>Option 4</option>
																</select>
															</div>
														</div>
													</div>

													<div class="id-step" data-step="2">
														<div class="id-step-element">
															<div class="id-step-element-content">
																<label data-sound-hover="sonidoA">
																	@if (old("id_step") && in_array("Fan", old("id_step")))
																		<input type="checkbox" name="id_step[]" value="Fan" checked>
																	@else
																		<input type="checkbox" name="id_step[]" value="Fan">
																	@endif
																	<span class="text">Fan</span>
																	<span class="icon icomoon icon-checkmark3"></span>
																</label>
															</div>
														</div>

														<div class="id-step-element dropdown-step {{(old("id_step") && in_array("Played", old("id_step"))) ? 'show' : ''}}">
															<div class="id-step-element-content">
																<label data-sound-hover="sonidoA" data-sound-click="sonidoB">
																	@if (old("id_step") && in_array("Played", old("id_step")))
																		<input type="checkbox" name="id_step[]" value="Played" checked>
																	@else
																		<input type="checkbox" name="id_step[]" value="Played">
																	@endif
																	<span class="text">Played</span>
																	<span class="icon icomoon icon-arrow-right4"></span>
																</label>
															</div>
															<div class="options-dropdown">
																<div class="options-dropdown-content">
																	@php
																		$options = old("id_step") && isset(old("id_step")['Played']) ? old("id_step")['Played'] : []; 
																	@endphp
																	<div class="options-dropdow-element">
																		<label data-sound-hover="sonidoC" data-sound-click="sonidoB">
																			@if (in_array("Option 1", $options))
																				<input type="checkbox" name="id_step[Played][]" value="Option 1" checked>
																			@else
																				<input type="checkbox" name="id_step[Played][]" value="Option 1">
																			@endif
																			<span class="text">Option 1</span>
																		</label>
																	</div>

																	<div class="options-dropdow-element">
																		<label data-sound-hover="sonidoC" data-sound-click="sonidoB">
																			@if (in_array("Option 2", $options))
																				<input type="checkbox" name="id_step[Played][]" value="Option 2" checked>
																			@else
																				<input type="checkbox" name="id_step[Played][]" value="Option 2">
																			@endif
																			<span class="text">Option 2</span>
																		</label>
																	</div>

																	<div class="options-dropdow-element">
																		<label data-sound-hover="sonidoC" data-sound-click="sonidoB">
																			@if (in_array("Option 3", $options))
																				<input type="checkbox" name="id_step[Played][]" value="Option 3" checked>
																			@else
																				<input type="checkbox" name="id_step[Played][]" value="Option 3">
																			@endif
																			<span class="text">Option 3</span>
																		</label>
																	</div>
																	
																	<div class="options-dropdow-element">
																		<label data-sound-hover="sonidoC" data-sound-click="sonidoB">
																			@if (in_array("Option 4", $options))
																				<input type="checkbox" name="id_step[Played][]" value="Option 4" checked>
																			@else
																				<input type="checkbox" name="id_step[Played][]" value="Option 4">
																			@endif
																			<span class="text">Option 4</span>
																		</label>
																	</div>
																</div>
															</div>
														</div>

														<div class="id-step-element">
															<div class="id-step-element-content">
																<label data-sound-hover="sonidoA" data-sound-click="sonidoB">
																	@if (old("id_step") && in_array("DT", old("id_step")))
																		<input type="checkbox" name="id_step[]" value="DT" checked>
																	@else
																		<input type="checkbox" name="id_step[]" value="DT">
																	@endif
																	<span class="text">DT</span>
																	<span class="icon icomoon icon-checkmark3"></span>
																</label>
															</div>
														</div>
														<div class="id-step-element">
															<div class="id-step-element-content">
																<label data-sound-hover="sonidoA" data-sound-click="sonidoB">
																	@if (old("id_step") && in_array("Freestyle", old("id_step")))
																		<input type="checkbox" name="id_step[]" value="Freestyle" checked>
																	@else
																		<input type="checkbox" name="id_step[]" value="Freestyle">
																	@endif
																	<span class="text">Freestyle</span>
																	<span class="icon icomoon icon-checkmark3"></span>
																</label>
															</div>
														</div>
													</div>
													
													<div class="gender-step" data-step="1">
														<div class="gender-element female-gender">
															<label data-sound-hover="sonidoA" data-sound-click="sonidoB">
																<input type="radio" name="gender" value="female">
																<span class="parent-icon">
																	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 239.21 369.43">
																		<g>
																			<g>
																				<path
																					d="M239.21,119.61a119.61,119.61,0,1,0-138,118.19v47.43H53.81V322h47.4v47.4H138V322h47.4v-36.8H138V237.8A119.8,119.8,0,0,0,239.21,119.61Zm-202.41,0a82.81,82.81,0,1,1,82.81,82.8A82.91,82.91,0,0,1,36.8,119.61Z" />
																			</g>
																		</g>
																	</svg>
																</span>
																<span class="gender">Female</span>
															</label data-sound-hover="Prev-Next">
														</div>
													
														<div class="gender-element male-gender">
															<label data-sound-hover="sonidoA" data-sound-click="sonidoB">
																<input type="radio" name="gender" value="male">
																<span class="parent-icon">
																	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 296.19 296.2">
																		<g>
																			<g>
																				<path
																					d="M173.54,0V36.75h59.91L190.07,80.14A119.56,119.56,0,1,0,119.51,296.2h0a119.53,119.53,0,0,0,96.54-190.07l43.39-43.39v59.91h36.75V0Zm4.53,235.24a82.77,82.77,0,1,1,0-117.11A82.25,82.25,0,0,1,178.07,235.24Z" />
																			</g>
																		</g>
																	</svg>
																</span>
																<span class="gender">Male</span>
															</label>
														</div>
													
														<div class="gender-element other-gender">
															<label data-sound-hover="sonidoA" data-sound-click="sonidoB">
																<input type="radio" name="gender" value="other">
																<span class="parent-icon">
																	<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
																		viewBox="0 0 302 310" style="enable-background:new 0 0 302 310;" xml:space="preserve">
																		<g>
																			<path d="M301.7,0.6L301.7,0.6L234.1,0l-0.2,22.1l26.2,0.2l-52,52c-15.3-11.6-34.4-18.5-55.1-18.5c-21.7,0-41.6,7.6-57.3,20.2
																			l-7.5-7.5l18.6-18.6L87.3,30.5L68.7,49.1L41.9,22.3l26.2-0.2L67.9,0L0.2,0.6v0H0l0,67.7l22.1,0l0-27.1l27.2,27.2L28.8,89l19.4,19.4
																			l20.6-20.6l8.3,8.3c-9.9,14.6-15.7,32.3-15.7,51.3c0,45.4,33.1,83.1,76.5,90.3v18.9H99.2V284h38.7v26h27.4v-26H204v-27.4h-38.7
																			v-18.5c44.7-6,79.2-44.3,79.2-90.7c0-20-6.4-38.5-17.3-53.5l52.7-52.7l0,27.1l22.1,0l0-67.7H301.7z M152.9,213.6
																			c-38.1,0-66.2-28.1-66.2-66.2s28.1-66.2,66.2-66.2c38.1,0,66.2,28.1,66.2,66.2S191,213.6,152.9,213.6z" />
																		</g>
																	</svg>
																</span>
																<span class="gender">Other</span>
															</label>
														</div>
													</div>

													<div class="options-steps-result">
														<div class="options-steps-result-content">
															<div class="step-result gender-result" data-show="1">
																<div class="count"> 01</div>
																<div class="selected-step">Sex</div>
																<div class="description"><span>Masculine</span></div>
															</div>
															<div class="step-result id-result" data-show="2">
																<div class="count"> 02</div>
																<div class="selected-step">Id</div>
																<div class="description"><span>Fan</span><span>FreeStyle</span><span>Forward</span><span>Goalkeeper</span></div>
															</div>
															<div class="step-result place-result" data-show="3">
																<div class="count"> 03</div>
																<div class="selected-step">Place</div>
																<div class="description"><span>Chile4</span><span>Santiago4</span><span>Palermo3</span></div>
															</div>
															<div class="step-result birth-result" data-show="4">
																<div class="count"> 04</div>
																<div class="selected-step">Birth</div>
																<div class="description"><span>12/02/2000</span></div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>

			<footer class="footer">
				<section class="">
					<div class="container">
						<div class="row">
							<div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
								<div class="widget widget-links">
									<div class="widget-body">
										<ul>
											<li><a href="#">Terms and Conditions</a></li>
											<li><a href="#">Privacy Policy</a></li>
											<li><a href="#">About Us</a></li>
										</ul>
									</div>
								</div>
							</div>
			
							<div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
								<div class="copyright">&copy;  2019, All Rights Reserved</div>
							</div>
						</div>
					</div>
				</section>
			</footer>
		</main>

		<script type="text/javascript" src="{{asset('assets/js/jquery.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('assets/js/jquery.migrate.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('assets/js/chosen.jquery.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('assets/js/ion.sound.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('assets/js/main.js')}}"></script>
	</body>
</html>