<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Web Erlang Editor</title>
        <meta name="description" content="An online tool for refactoring Erlang code">
        <link rel="stylesheet" href="main.css">
        <link rel="stylesheet" href="codemirror/lib/codemirror.css">
    </head>
    <body>
    
      <div id="top" class="div">
          <p>LOREM IPSUM</p>
             <div id="upper">
      
      <div class="text">
      
     <textarea name="" id="textarea" cols="30" rows="10">
   
         <?php 
            $target_dir = "uploads/";       
            $name =  $target_dir.$_POST["name"]; echo file_get_contents("$name");
            ?>
     </textarea>
               <script src="codemirror/lib/codemirror.js"></script>
               <script>
                   var myTextarea = document.getElementById("textarea");
                   var editor = CodeMirror.fromTextArea(myTextarea, {
                    lineNumbers: true
                    });
                   editor.setSize(600, 550);   
               </script>
               <script src="codemirror/addon/search/search.js"></script>
               <script src="codemirror/addon/search/searchcursor.js"></script>
                 </div>
      <div id="right" class="div">
          <h2>Search text</h2>
          <input type="search" id="search">Search</input>
                 <input type="button" class="button" id="down" value="Download">
          <script src="search.js"></script>
          
      </div>
       
        </div>
    </body>
</html>
