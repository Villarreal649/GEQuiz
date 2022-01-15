@extends('backend.layouts.master')

	@section('title','Update user')

	@section('content')

				<div class="span9">
                    <div class="content">
                    	@if(Session::has('message'))

                    		<div class="alert alert-success">
                    			{{Session::get('message')}}
                    		</div>

                    	@endif
                        <div class="module">
                            <div class="module-head">
                                <h3>Update User</h3>
                            </div>

                            <div class="module-body">
                            	<form action="{{route('user.update',[$user->id])}}" method="POST">@csrf
                                    {{method_field('PUT')}}

                            		<div class="control-group">
                            			<label class="control-lable">Full name</label>
                            			<div class="controls">
                            				<input type="text" name="name" class="span8 @error('name') border-red @enderror" placeholder="name" value=" {{$user->name}}  " >
                                           

                            			</div>
                                         @error('name')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror  

                            		</div>
                                      



                                    <div class="control-group">
                                    <label class="control-lable" for="password">Password</label>
                                    <div class="controls"> 
                                        <input type="text" name="password" class="span8 @error('password') border-red @enderror" placeholder="password" value=" {{$user->visible_password}}  " >
                                    </div>
                                     @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror      

                                    </div>

                                    <div class="control-group">
                                    <label class="control-lable" for="CP">PostCode</label>
                                    <div class="controls"> 
                                        <input type="text" name="CP" class="span8 @error('question') border-red @enderror" placeholder="CP" value=" {{$user->CP}}  " >
                                    </div>
                                     @error('CP')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror      

                                    </div>

                                    <div class="control-group">
                                    <label class="control-lable" for="occupation">Address</label>
                                    <div class="controls"> 
                                        <input type="text" name="address" class="span8 @error('address') border-red @enderror" placeholder="address" value=" {{$user->address}}  " >
                                    </div>
                                     @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror      

                                    </div>

                                    <div class="control-group">
                                    <label class="control-lable" for="occupation">Phone</label>
                                    <div class="controls"> 
                                        <input type="text" name="phone" class="span8 @error('phone') border-red @enderror" placeholder="phone" value=" {{$user->phone}}  " >
                                    </div>
                                     @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror      

                                    </div>
                                    <div class="control-group">
                                    <label class="control-lable" for="area">Area</label>
                                    <div class="controls"> 
                                        <input type="text" name="area" class="span8 @error('area') border-red @enderror" placeholder="area" value=" {{$user->area}}  " >
                                    </div>
                                     @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror      

                                    </div>
                                    <div class="control-group">
                                    <label class="control-lable" for="company">Campany's name</label>
                                    <div class="controls"> 
                                        <input type="text" name="company" class="span8 @error('company') border-red @enderror" placeholder="company" value=" {{$user->company}}  " >
                                    </div>
                                     @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror      

                                    </div>
                                   

									
								<div class="control-group">
									<button type="submit" class="btn btn-success">Update User</button>

								</div>


                            	

                            </form>

                       		</div>
                   		</div>
                		
                		</div>
           			 
           			</div>
        		</div> 






@endsection