<?php
    include "connection.php";
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $trans = $_POST['trans'];
        $phone = $_POST['phone'];
        $status = $_POST['status'];
        $q = " INSERT INTO `crud2`(`name`, `email`, `trans`, `phone`, `status`) VALUES ( '$name', '$email', '$trans', '$phone', '$status')";

        $query = mysqli_query($conn,$q);
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="styls.css" type="text/css">

    <title>Tracker</title>
  </head>
  <body background="red";>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
      <div class="container-fluid">
        <div class="dashboard"><a class="navbar-brand" href="aries.html" style="font-size:15px;">
        <svg style='color:#3bbcf6;' class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="34" height="34" fill="none" viewBox="0 0 24 24">
  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.5 11.5 11 13l4-3.5M12 20a16.405 16.405 0 0 1-5.092-5.804A16.694 16.694 0 0 1 5 6.666L12 4l7 2.667a16.695 16.695 0 0 1-1.908 7.529A16.406 16.406 0 0 1 12 20Z"></path>
</svg>  
       <b> Work Work</b></a>
<div class="boxicon">
       <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24" width="18" height="18">
  <path d="M0,2.5V11H11V0H2.5C1.122,0,0,1.122,0,2.5Zm10,7.5H1V2.5c0-.827,.673-1.5,1.5-1.5h7.5V10ZM21.5,0H13V11h11V2.5c0-1.378-1.122-2.5-2.5-2.5Zm1.5,10H14V1h7.5c.827,0,1.5,.673,1.5,1.5v7.5ZM0,21.5c0,1.378,1.122,2.5,2.5,2.5H11V13H0v8.5Zm1-7.5H10v9H2.5c-.827,0-1.5-.673-1.5-1.5v-7.5Zm12,10h8.5c1.378,0,2.5-1.122,2.5-2.5V13H13v11Zm1-10h9v7.5c0,.827-.673,1.5-1.5,1.5h-7.5V14Z"></path>
</svg> <a class="navbar-brand" href="aries.html" style="font-size:15px;">Dashboard</a></div>
<div class="boxicon">
<svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24" width="18" height="18"><path d="M8,14h8v1H8v-1ZM24,5.5V23H0V3.5C0,2.121,1.121,1,2.5,1h5.618l4,2h9.382c1.379,0,2.5,1.121,2.5,2.5ZM1,3.5v3.5H23v-1.5c0-.827-.673-1.5-1.5-1.5H11.882L7.882,2H2.5c-.827,0-1.5,.673-1.5,1.5ZM23,22V8H1v14H23Z"></path></svg>

<a class="navbar-brand" href="projects.php" style="font-size:15px;">Tracker</a></div>
<div class="boxicon">
<svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24" width="18" height="18">
  <path d="M21.5,2H2.5C1.122,2,0,3.122,0,4.5V22H24V4.5c0-1.378-1.122-2.5-2.5-2.5ZM2.5,3H21.5c.534,0,1,.282,1.266,.703L14.494,11.975c-.662,.661-1.54,1.025-2.479,1.025h-.017c-.914-.017-1.826-.36-2.492-1.025L1.234,3.703c.266-.421,.732-.703,1.266-.703ZM1,21V4.883l7.799,7.799c.851,.851,1.98,1.318,3.177,1.318h.044c1.202,0,2.331-.467,3.182-1.318l7.799-7.799V21H1Z"></path>
</svg>

<a class="navbar-brand" href="smiley.php" style="font-size:15px;">Stats</a></div>

<div class="boxicon"><svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24" width="18" height="18">
  <path d="m24,23.5c0,.276-.224.5-.5.5H4.5c-2.481,0-4.5-2.019-4.5-4.5V.5C0,.224.224,0,.5,0s.5.224.5.5v19c0,1.93,1.57,3.5,3.5,3.5h19c.276,0,.5.224.5.5Zm-5.5-3.5c.276,0,.5-.224.5-.5V6.5c0-.276-.224-.5-.5-.5s-.5.224-.5.5v13c0,.276.224.5.5.5Zm-4,0c.276,0,.5-.224.5-.5v-8c0-.276-.224-.5-.5-.5s-.5.224-.5.5v8c0,.276.224.5.5.5Zm-4,0c.276,0,.5-.224.5-.5V6.5c0-.276-.224-.5-.5-.5s-.5.224-.5.5v13c0,.276.224.5.5.5Zm-4,0c.276,0,.5-.224.5-.5v-8c0-.276-.224-.5-.5-.5s-.5.224-.5.5v8c0,.276.224.5.5.5Z"></path>
</svg>

<a class="navbar-brand" href="aries.html" style="font-size:15px;">Analytics</a></div>

<div class="boxicon"><svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24" width="18" height="18">
  <path d="M9.8,9.802c-.755,.753-1.122,1.476-1.122,2.208,0,.957,.64,1.706,1.122,2.187,.74,.739,1.47,1.108,2.2,1.108s1.46-.37,2.2-1.108c.755-.753,1.122-1.476,1.122-2.208,0-.957-.64-1.706-1.122-2.187-1.48-1.478-2.92-1.478-4.4,0Zm3.694,3.688c-1.251,1.248-2.042,.944-2.988,0-.565-.564-.828-1.034-.828-1.479,0-.454,.271-.944,.828-1.5,.583-.582,1.065-.826,1.511-.826,.511,0,.972,.322,1.478,.826,.565,.564,.828,1.034,.828,1.479,0,.454-.271,.944-.828,1.5Z"></path>
  <g>
    <path d="M9.8,9.802c-.755,.753-1.122,1.476-1.122,2.208,0,.957,.64,1.706,1.122,2.187,.74,.739,1.47,1.108,2.2,1.108s1.46-.37,2.2-1.108c.755-.753,1.122-1.476,1.122-2.208,0-.957-.64-1.706-1.122-2.187-1.48-1.478-2.92-1.478-4.4,0Zm3.694,3.688c-1.251,1.248-2.042,.944-2.988,0-.565-.564-.828-1.034-.828-1.479,0-.454,.271-.944,.828-1.5,.583-.582,1.065-.826,1.511-.826,.511,0,.972,.322,1.478,.826,.565,.564,.828,1.034,.828,1.479,0,.454-.271,.944-.828,1.5Z"></path>
    <path d="M23.019,11.948c.008-1.595-.817-2.481-2.521-2.7-.188-.394-.417-.787-.694-1.188,1.205-1.456,1.21-2.694,.026-3.876-1.183-1.181-2.425-1.175-3.884,.029-.401-.274-.794-.501-1.188-.688-.217-1.706-1.134-2.524-2.705-2.524-1.602,.008-2.495,.849-2.725,2.569-.392,.189-.791,.421-1.19,.691-1.451-1.197-2.694-1.194-3.89,0-1.178,1.175-1.18,2.448-.001,3.882-.273,.4-.506,.798-.696,1.189-1.719,.229-2.56,1.122-2.568,2.721-.008,1.595,.817,2.481,2.521,2.7,.188,.394,.417,.787,.694,1.188-1.205,1.456-1.21,2.694-.026,3.876,1.184,1.182,2.425,1.176,3.884-.029,.401,.274,.794,.501,1.188,.688,.216,1.697,1.113,2.524,2.682,2.524,1.605,0,2.519-.849,2.749-2.569,.392-.189,.791-.421,1.19-.691,1.451,1.197,2.694,1.193,3.89,0,1.178-1.175,1.18-2.448,.001-3.882,.273-.4,.506-.798,.696-1.189,1.719-.229,2.56-1.122,2.568-2.721Zm-3.36,2.053c-.227,.515-.544,1.051-.942,1.594-.142,.193-.127,.459,.036,.635,1.373,1.487,.898,2.2,.295,2.802-.63,.628-1.321,1.078-2.812-.295-.175-.162-.44-.176-.634-.036-.541,.395-1.077,.71-1.595,.937-.167,.073-.282,.232-.297,.415-.139,1.615-.779,1.942-1.766,1.947-1.008-.027-1.609-.304-1.734-1.9-.015-.186-.131-.348-.302-.421-.521-.222-1.041-.526-1.588-.929-.089-.065-.193-.097-.296-.097-.122,0-.243,.044-.338,.132-1.503,1.383-2.211,.919-2.807,.324-.595-.594-1.06-1.299,.323-2.797,.163-.177,.178-.444,.035-.637-.4-.541-.716-1.075-.937-1.588-.073-.17-.234-.286-.419-.301-1.587-.126-1.903-.755-1.898-1.729,.005-.984,.333-1.622,1.946-1.761,.182-.016,.341-.129,.415-.296,.227-.515,.544-1.051,.942-1.594,.142-.193,.127-.459-.036-.635-1.373-1.487-.898-2.2-.295-2.802,.606-.604,1.321-1.08,2.812,.295,.176,.163,.441,.178,.634,.036,.541-.395,1.077-.71,1.595-.937,.167-.073,.282-.232,.297-.415,.139-1.615,.779-1.942,1.766-1.947,.99-.027,1.608,.304,1.734,1.9,.015,.186,.131,.348,.302,.421,.521,.222,1.041,.526,1.588,.929,.193,.142,.458,.127,.635-.035,1.504-1.382,2.212-.918,2.807-.324,.595,.594,1.06,1.299-.323,2.797-.163,.177-.178,.444-.035,.637,.4,.541,.716,1.075,.937,1.588,.073,.17,.234,.286,.419,.301,1.587,.126,1.903,.755,1.898,1.729-.005,.984-.333,1.622-1.946,1.761-.182,.016-.341,.129-.415,.296Z"></path>
  </g>
</svg>

<a class="navbar-brand" href="aries.html" style="font-size:15px;">Settings</a></div>

        <div class="collapse navbar-collapse" id="navbarNav">
          
        
      </div>
    </nav><br>
   <div class="d-grid gap-2 d-md-block" style='margin-left:200px' ><br>
</div>
    <div class="container my-4">
    
 <div class="col-lg-6 m-auto">
 
 <form method="post">
 
 <br><br><div class="card" style='background:rgb(0,0,0,0.23);  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);'>
 
 <div class="card-header bg-body-tertiary">
 <h1 class="text-white text-center">  Add Merchant</h1>

<div style="padding:25px; color:white;">
 <label> DBA: </label>
 <input type="text" name="name" class="form-control"> <br>

 <label> EMAIL: </label>
 <input type="text" name="email" class="form-control"> <br>

  <label> ORDER NUMBER: </label>
 <input type="text" name="trans" class="form-control"> <br>

 <label> DESCRIPTOR: </label>
 <input type="text" name="phone" class="form-control"> <br>

 <label> STATUS: </label>
 <select type="text" name="status" class="form-control">
  <option></option>
  <option class='green-option'>PENDING</option>
  <option class='red-option'>COMPLETED</option>
</select><br>
 <button class="btn btn-secondary p-1" type="submit" name="submit" style='color:white'> Submit </button>
 <a class="btn btn-success p-1" type="submit" name="cancel" href="projects.php" style='color:white'> Cancel </a><br>
 </div>



 </form>
 </div></div></div></div>
 <div style="height:60px; background-color:rgb(0,0,0,0.23); padding:0.5%; float:left; width:100%; bord 2px solid); margin-top:430px; text-align:center; color:gray; font-family:tahoma; font-size: smaller;">Designed by<font color="#5bc2f2"> ariespogi</font> </div>
</body>
</html>