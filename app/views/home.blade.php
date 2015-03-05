@extends('layout.app')

@section('pageTitle')
  Jizan Intranet : Home
@stop
@section('body')
	<div class="ui medium inverted blue menu">
      <a class="active item">
        <i class="home icon"></i> Home
      </a>
      <a class="item">
        <i class="checkmark box icon"></i> To-Do List
      </a>
      <a class="item">
        <i class="spy icon"></i> Self Service
      </a>
        <a class="item">
        <i class="file text outline icon"></i> Forms
      </a>
      <div class="right menu">

      <a class="item notbtn">
        <div class="ui red medium label">
          <i class="alarm icon"></i> <b>23</b>
        </div>
      </a>
      
        
        <div class="ui dropdown item">
          <i class="user icon"></i><?php echo $firstname ?> <i class="dropdown icon"></i>
          <div class="menu">
            
            <a class="item"><i class="edit icon"></i>Edit Profile</a>
            <a class="item"><i class="options icon"></i>Settings</a>
            <a class="item" id="logoutbtn" href="<?php echo URL::to('logout') ?>"><i class="sign out icon"></i>Log Out</a>

          </div>
        </div>
      </div>
    </div>



<div class="ui basic test modal">
    <div class="header">
    Please Confirm!
  </div>
  <div class="content">
    <div class="image">
      <i class="shutdown icon"></i>
    </div>
    <div class="description">
      <p>Are you sure you want to Logout?</p>
    </div>
  </div>
  <div class="actions">
    <div class="two fluid ui inverted buttons">
      <div class="ui green basic inverted deny button" data-value="No">
        <i class="remove icon"></i>
        No
      </div>
      <div class="ui red basic inverted approve button" data-value = "Yes">
        <i class="checkmark icon"></i>
        Yes
      </div>
    </div>
  </div>
  </div>

  <div class="ui fifteen wide centered column grid">
    <div class="twelve wide left aligned column">
      <div class="ui error message">
        <i class="close icon"></i>
        <div class="header">Notice</div>
        <p>This is to remind all of the staffs that Dining Room shall remain closed until further notice.</p>
        
      </div>



      <div class="ui stacked segment">
      <a class="ui blue left ribbon label">WELCOME</a>
      <p></p>
      <p>Te eum doming eirmod, nominati pertinacia argumentum ad his. Ex eam alia facete scriptorem, est autem aliquip detraxit at. Usu ocurreret referrentur at, cu epicurei appellantur vix. Cum ea laoreet recteque electram, eos choro alterum definiebas in. Vim dolorum definiebas an. Mei ex natum rebum iisque.</p>
       <p>Audiam quaerendum eu sea, pro omittam definiebas ex. Te est latine definitiones. Quot wisi nulla ex duo. Vis sint solet expetenda ne, his te phaedrum referrentur consectetuer. Id vix fabulas oporteat, ei quo vide phaedrum, vim vivendum maiestatis in.</p>
       <p>Eu quo homero blandit intellegebat. Incorrupte consequuntur mei id. Mei ut facer dolores adolescens, no illum aperiri quo, usu odio brute at. Qui te porro electram, ea dico facete utroque quo. Populo quodsi te eam, wisi everti eos ex, eum elitr altera utamur at. Quodsi convenire mnesarchum eu per, quas minimum postulant per id.</p>
      </div>
    </div>

    <div class="three wide column">
      <div class="ui blue inverted right inline vertical sidebar menu">
        
        <div style="padding-top: 12px" class="ui inverted red segment">
        <h4 class="ui white centered header"><i class="alarm icon"></i>NOTIFICATIONS</h4>
        <br>
        </div>
        <a class="item">
          
            <h4 class="ui inverted header">New Task</h4>
            <p>You were assigned a new task by Ma'am Mon</p>
            
        </a>
        <div>
          <span class="ui horizontal divider"></span> 
        </div>
        


      </div>

      <div class="pusher">
        <div class="ui piled segment">
        <h4 class="ui blue header">FAVORITES</h4>
        <p>Te eum doming eirmod, nominati pertinacia argumentum ad his. Ex eam alia facete scriptorem, est autem aliquip detraxit at. Usu ocurreret referrentur at, cu epicurei appellantur vix. Cum ea laoreet recteque electram, eos choro alterum definiebas in. Vim dolorum definiebas an. Mei ex natum rebum iisque.</p>
        </div>

        <div class="ui piled segment">
        <h4 class="ui blue header">TODO LIST</h4>
        <p>Te eum doming eirmod, nominati pertinacia argumentum ad his. Ex eam alia facete scriptorem, est autem aliquip detraxit at. Usu ocurreret referrentur at, cu epicurei appellantur vix. Cum ea laoreet recteque electram, eos choro alterum definiebas in. Vim dolorum definiebas an. Mei ex natum rebum iisque.</p>
        
        </div>

        <div class="ui piled segment">
        <h4 class="ui blue header">CALENDAR</h4>
        <p>Te eum doming eirmod, nominati pertinacia argumentum ad his. Ex eam alia facete scriptorem, est autem aliquip detraxit at. Usu ocurreret referrentur at, cu epicurei appellantur vix. Cum ea laoreet recteque electram, eos choro alterum definiebas in. Vim dolorum definiebas an. Mei ex natum rebum iisque.</p>
        </div>


        <div class="ui piled segment">
        <h4 class="ui blue header">QUICK LINKS</h4>
        <p>Te eum doming eirmod, nominati pertinacia argumentum ad his. Ex eam alia facete scriptorem, est autem aliquip detraxit at. Usu ocurreret referrentur at, cu epicurei appellantur vix. Cum ea laoreet recteque electram, eos choro alterum definiebas in. Vim dolorum definiebas an. Mei ex natum rebum iisque.</p>
        </div>
      </div>
    </div>

  </div>

  <script>
      $('.notbtn').click(function(){
         $('.right.sidebar').sidebar('setting',{transition: 'overlay'}).sidebar('show');
      });
     

  </script>


  
















@stop





