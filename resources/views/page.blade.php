@extends('layouts.site')

@section('content')
<div class="w-container">
    <div class="keyfeatures">
      <div class="w-row keyfeature-blocks">
      
      @foreach($articles as $article)
         
         <div class="col-md-4">
          <img class="feature-image" src="images/icon2.png" alt="customization.png">
          <h3>{{ $article->title }}</h3>
          <p class="center-block">{{ $article->desc }}</p>
          <p><a class="btn btn-default" href="{{ route('articleShow',['id'=>$article->id]) }}" role="button">Деталі &raquo;</a></p>
       
       <form action="{{ route('articleDelete',['article' =>$article->id]) }}" method="post">
       
       {{method_field('DELETE')}}
        
        {{ csrf_field() }}
       
        <button type="submit" class="btn btn-danger">
        	Delete
        </button>
        
        </form>
       
        </div>
         
         @endforeach
         
      </div>
    </div>
  </div>
  <div class="themes-wrapper" id="themes">
    <div class="w-container themes-container">
      <h1 class="themes-header">Gallery</h1>
      <div class="w-row themes">
        <div class="w-col w-col-4 theme-left">
          <a class="w-inline-block"  target="_blank">
            <img class="theme-thumbnail" src="images/1.jpg" alt="UltraMnml">
            <div class="theme-text-link">Photo 1</div>
          </a>
        </div>
        <div class="w-col w-col-4 theme-center">
          <a class="w-inline-block theme-link-block"  target="_blank">
            <img class="theme-thumbnail" src="images/2.jpg" alt="UltraMnm">
          <div class="theme-text-link">Photo 2</div>
          </a>
        </div>
        <div class="w-col w-col-4 theme-right">
          <a class="w-inline-block"  target="_blank">
            <img class="theme-thumbnail" src="images/3.jpg" alt="UltraMnm">
          <div class="theme-text-link">Photo 3</div>
          </a>
        </div>
      </div>
      <div class="w-row themes">
        <div class="w-col w-col-4 theme-left">
          <a class="w-inline-block"  target="_blank">
            <img class="theme-thumbnail" src="images/4.jpg" alt="UltraMnm">
            <div class="theme-text-link">Photo 4</div>
          </a>
        </div>
        <div class="w-col w-col-4 theme-center">
          <a class="w-inline-block theme-link-block"  target="_blank">
            <img class="theme-thumbnail" src="images/5.jpg" alt="UltraMnm">
          <div class="theme-text-link">Photo 5</div>
          </a>
        </div>
        <div class="w-col w-col-4 theme-right">
          <a class="w-inline-block" target="_blank">
            <img class="theme-thumbnail" src="images/6.jpg" alt="UltraMnm">
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

  <script src="js/classie.js"></script>
	<script src="js/borderMenu.js"></script>
    
    @endsection
    