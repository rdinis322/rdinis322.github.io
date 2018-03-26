

@extends('layouts.site')

@section('content')



    
    <div class="container">
      <!-- Example row of columns -->
      <div class="row">

			<div class="form">
			
				<form method="POST" action="{{route('articleStore')}}">
			
				<div class="form-group">
				    <label for="title">Заголовок</label>
				    <input type="text" class="form-control" id="title" name="title" placeholder="Заголовок">
				  </div>
				  <div class="form-group">
				    <label for="alias">Псевдоним</label>
				    <input type="text" class="form-control" id="alias" name="alias" placeholder="Псевдоним">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputFile">Краткое описание</label>
				    <textarea class="form-control" name="desc"></textarea>
				  </div>
				  <div class="form-group">
				    <label for="exampleInputFile">Полный текст</label>
				    <textarea class="form-control" name="text"></textarea>
				  </div>
				  
				  <button type="submit" class="btn btn-default">Add</button>
				  
				   {{ csrf_field() }}
				    
				</form>
			
	          
		       
	        </div>
      </div>

      
      
       <div class="themes-wrapper" id="themes">
    <div class="w-container themes-container">
      <h1 class="themes-header">Gallery</h1>
      <div class="w-row themes">
        <div class="w-col w-col-4 theme-left">
          <a class="w-inline-block"  target="_blank">
            <img class="theme-thumbnail" src="/images/1.jpg" alt="UltraMnml">
            <div class="theme-text-link">Photo 1</div>
          </a>
        </div>
        <div class="w-col w-col-4 theme-center">
          <a class="w-inline-block theme-link-block"  target="_blank">
            <img class="theme-thumbnail" src="/images/2.jpg" alt="UltraMnm">
          <div class="theme-text-link">Photo 2</div>
          </a>
        </div>
        <div class="w-col w-col-4 theme-right">
          <a class="w-inline-block"  target="_blank">
            <img class="theme-thumbnail" src="/images/3.jpg" alt="UltraMnm">
          <div class="theme-text-link">Photo 3</div>
          </a>
        </div>
      </div>
      <div class="w-row themes">
        <div class="w-col w-col-4 theme-left">
          <a class="w-inline-block"  target="_blank">
            <img class="theme-thumbnail" src="/images/4.jpg" alt="UltraMnm">
            <div class="theme-text-link">Photo 4</div>
          </a>
        </div>
        <div class="w-col w-col-4 theme-center">
          <a class="w-inline-block theme-link-block"  target="_blank">
            <img class="theme-thumbnail" src="/images/5.jpg" alt="UltraMnm">
          <div class="theme-text-link">Photo 5</div>
          </a>
        </div>
        <div class="w-col w-col-4 theme-right">
          <a class="w-inline-block" target="_blank">
            <img class="theme-thumbnail" src="/images/6.jpg" alt="UltraMnm">
          <div class="theme-text-link">Photo 6</div>
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="footer">
    <div class="w-container footer-container">
      <div class="footer-left">&#169;RDinis228</div>
      <div class="footer-right"> <i class="icon-facebook-sign" style="font-size:24px;"></i>  <i class="icon-twitter-sign" style="font-size:24px;"></i>  <i class="icon-google-plus-sign" style="font-size:24px;"></i>  <i class="icon-skype" style="font-size:24px;"></i> <i class="icon-youtube" style="font-size:24px;"></i></div>
    </div>
  </div>

  <script src="/js/classie.js"></script>
	<script src="/js/borderMenu.js"></script>


@endsection

