<?php
function showheader() {
     echo '
     <div id="header">
          <meta name="google-signin-client_id" content="'.$secret['id'].'.apps.googleusercontent.com">
           <h1 id="title" ng-bind="title"></h1>
          <input type="text" placeholder="Search the forums!" class="rightnav" />
          <div class="g-signin2" data-onsuccess="onSignIn"></div>

     </div>
';
}
?>
