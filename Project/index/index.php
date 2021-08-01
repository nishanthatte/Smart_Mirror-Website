
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="index.css">
    <title>Smart Mirror</title>
</head>
<body>
 <div class="NavBar">
    <img src="logo.png" class="logo"> 
         <div class="menu">
             <ul>   
                 <li><a href="#" class="btn"><span>Home</span></a></li>
                 <li><a href="#" class="btn"><span>Specs</span></a></li> 
                 <li><a href="#" class="btn"><span>Contact Us</span></a></li>
                 <li><a href="http://localhost/Project/login/login.php" class="btn"><span>Login</span></a></li> 
            </ul>
         </div>
 </div>
<!--<div class="sm_img">
 <img src="SM_3.png"  class="smirror_img" usemap="#image_map">
 <map name="image_map">
  <area alt="Frame" title="Frame" href="#" coords="330,192,408,701" shape="rect">
  <area alt="Frame" title="Frame" href="#" coords="710,246,799,773" shape="rect">
  <area alt="Frame" title="Frame" href="#" coords="411,196 414,295 705,347 706,236 411,197 " shape="polygon">
  <area alt="Frame" title="Frame" href="#" coords="414,597 414,712 708,762 708,669 683,681 436,624 421,614 414,597 " shape="polygon">
  <area alt="Camera" title="Camera" href="#" coords="520,200 592,214 625,218 604,164 578,155 540,161 520,200 " shape="polygon">
  <area alt="Display & Mirror" title="Display & Mirror" href="#" coords="414,302 428,607 697,667 713,645 710,359 688,341 414,303 " shape="polygon">
</map>
 </div>-->
 <div class="fade">
    <div class="content">
        <h1>The Future of Home Automation Is Here</h1>
        <p>Test text will be replaced later</p>
    </div>
 </div>
 <div class="maincontent">
     <p> </p>
     <div class="prx">
       
     </div>
     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque fringilla felis eget egestas ultricies. Proin fermentum sit amet nulla vel tincidunt. Fusce eu ex et sem pretium rhoncus. Nulla tristique tortor a dui finibus iaculis. Nam semper urna lectus, eget hendrerit massa varius et. Duis interdum ex eget quam vulputate, in eleifend dolor finibus. Nulla lorem ante, auctor in tristique ac, viverra nec est. Integer a tincidunt neque. Etiam molestie, leo a pellentesque facilisis, lorem sem eleifend orci, at pretium tortor turpis sit amet justo. Vestibulum vitae ultricies mauris, ac sagittis dui. Nullam iaculis tellus leo, rhoncus lobortis magna tristique faucibus. Etiam elementum sit amet nunc convallis volutpat. Fusce vehicula, odio ut ullamcorper vestibulum, turpis orci porta urna, sed consectetur neque est et felis. Nulla dignissim suscipit nisl et scelerisque. Proin semper nisl eros, sit amet bibendum urna volutpat id. Fusce eleifend tincidunt lacus sit amet porta.</p>
     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque fringilla felis eget egestas ultricies. Proin fermentum sit amet nulla vel tincidunt. Fusce eu ex et sem pretium rhoncus. Nulla tristique tortor a dui finibus iaculis. Nam semper urna lectus, eget hendrerit massa varius et. Duis interdum ex eget quam vulputate, in eleifend dolor finibus. Nulla lorem ante, auctor in tristique ac, viverra nec est. Integer a tincidunt neque. Etiam molestie, leo a pellentesque facilisis, lorem sem eleifend orci, at pretium tortor turpis sit amet justo. Vestibulum vitae ultricies mauris, ac sagittis dui. Nullam iaculis tellus leo, rhoncus lobortis magna tristique faucibus. Etiam elementum sit amet nunc convallis volutpat. Fusce vehicula, odio ut ullamcorper vestibulum, turpis orci porta urna, sed consectetur neque est et felis. Nulla dignissim suscipit nisl et scelerisque. Proin semper nisl eros, sit amet bibendum urna volutpat id. Fusce eleifend tincidunt lacus sit amet porta.</p>
     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque fringilla felis eget egestas ultricies. Proin fermentum sit amet nulla vel tincidunt. Fusce eu ex et sem pretium rhoncus. Nulla tristique tortor a dui finibus iaculis. Nam semper urna lectus, eget hendrerit massa varius et. Duis interdum ex eget quam vulputate, in eleifend dolor finibus. Nulla lorem ante, auctor in tristique ac, viverra nec est. Integer a tincidunt neque. Etiam molestie, leo a pellentesque facilisis, lorem sem eleifend orci, at pretium tortor turpis sit amet justo. Vestibulum vitae ultricies mauris, ac sagittis dui. Nullam iaculis tellus leo, rhoncus lobortis magna tristique faucibus. Etiam elementum sit amet nunc convallis volutpat. Fusce vehicula, odio ut ullamcorper vestibulum, turpis orci porta urna, sed consectetur neque est et felis. Nulla dignissim suscipit nisl et scelerisque. Proin semper nisl eros, sit amet bibendum urna volutpat id. Fusce eleifend tincidunt lacus sit amet porta.</p>
     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque fringilla felis eget egestas ultricies. Proin fermentum sit amet nulla vel tincidunt. Fusce eu ex et sem pretium rhoncus. Nulla tristique tortor a dui finibus iaculis. Nam semper urna lectus, eget hendrerit massa varius et. Duis interdum ex eget quam vulputate, in eleifend dolor finibus. Nulla lorem ante, auctor in tristique ac, viverra nec est. Integer a tincidunt neque. Etiam molestie, leo a pellentesque facilisis, lorem sem eleifend orci, at pretium tortor turpis sit amet justo. Vestibulum vitae ultricies mauris, ac sagittis dui. Nullam iaculis tellus leo, rhoncus lobortis magna tristique faucibus. Etiam elementum sit amet nunc convallis volutpat. Fusce vehicula, odio ut ullamcorper vestibulum, turpis orci porta urna, sed consectetur neque est et felis. Nulla dignissim suscipit nisl et scelerisque. Proin semper nisl eros, sit amet bibendum urna volutpat id. Fusce eleifend tincidunt lacus sit amet porta.</p>

 </div> 
    <script>
        const btn = document.querySelector('.btn');
        btn.onmousemove = function(e){
            const x =e.pageX - btn.offsetLeft;
            const y =e.pageY - btn.offsetTop;

            btn.style.setProperty('--x',x+'px');
            btn.style.setProperty('--y',y+'px');
        }
    </script>
</body>
</html>