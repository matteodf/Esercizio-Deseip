<?php
//index.php
$connect = mysqli_connect("localhost", "root", "", "eserciziodeseip");
function make_query_banner($connect)
{
 $query = "SELECT * FROM banner ORDER BY banner_id ASC";
 $result = mysqli_query($connect, $query);
 return $result;
}

function make_query_cards($connect)
{
 $query = "SELECT * FROM machines ORDER BY machine_id ASC";
 $result = mysqli_query($connect, $query);
 return $result;
}


function make_slide_indicators($connect)
{
 $output = ''; 
 $count = 0;
 $result = make_query_banner($connect);
 while($row = mysqli_fetch_array($result))
 {
  if($count == 0)
  {
   $output .= '
   <li data-target="#dynamic_slide_show" data-slide-to="'.$count.'" class="active"></li>
   ';
  }
  else
  {
   $output .= '
   <li data-target="#dynamic_slide_show" data-slide-to="'.$count.'"></li>
   ';
  }
  $count = $count + 1;
 }
 return $output;
}

function make_slides($connect)
{
 $output = '';
 $count = 0;
 $result = make_query_banner($connect);
 while($row = mysqli_fetch_array($result))
 {
  if($count == 0)
  {
   $output .= '
   <div class="item active">
   ';
  }
  else
  {
   $output .= '
   <div class="item">
   ';
  }
  $output .= '
  <img style="margin:-5% 0" src="assets/images/'.$row["banner_image"].'" alt="'.$row["banner_title"].'" />
  <div class="carousel-caption caption-centered" style="top:15%; bottom:0; left:-20%">
    <h1 style="font-weight:600; font-size:6rem;">'.$row["banner_title"].'</h1>
  </div>
  <div class="carousel-caption" style="top:20%; bottom:0; right:-20%;">
    <p>'.$row["banner_text"].'</p>
    <a href="'.$row["banner_link"].'" class="btn btn-primary" style="background-color:#FFFFFF00; color:white; border-color:white; font-weight:600; border-radius:100px">
      Scopri di più
    </a>
  </div>
  </div>
  ';

  $count = $count + 1;
 }
 return $output;
}

function create_cards($connect){

  $output = '
  <div class="row" style="display:flex; margin:5% 5% 0 5%">
  ';
  $count = 0;
  $count_col = 0;
  $result = make_query_cards($connect);
  
  while($row = mysqli_fetch_array($result)){
    $count_col++;
    if ($count > 0 && $count % 5 == 0){
      $output.='
      <div class="row" style="display:flex; margin:5% 5% 0 5%">
      ';
    }

    $output .= '
    <div class="column" style="flex:20%; margin:0 5px 5px 5px">
      <img src="assets/images/'.$row["image"].'" alt="'.$row["machine_code"].'" style="width:75%;"/>
      <p style="font-weight:600; padding-top:5px; margin-bottom:5px">'.$row["machine_code"].'</p>
      <hr style="height:2px; width:8%; border-width:0; color:black; background-color:black; margin:0 0 5px 0;">
      <p style="margin-bottom:5px">'.$row["machine_summary"].'</p>
      <a data-toggle="modal" href="#machine_'.$row["machine_id"].'" class="btn btn-primary" style="background-color:#FFFFFF00; color:#AB1D21; border-color:#AB1D21; font-weight:600; border-radius:100px">
        <svg xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" width="40.435001" height="14.858" viewBox="0 0 40.435002 14.857999" version="1.1" id="svg6" sodipodi:docname="Group 75.svg" inkscape:version="1.0.1 (3bc2e813f5, 2020-09-07)">
          <metadata id="metadata12">
            <rdf:RDF>
              <cc:Work rdf:about="">
                <dc:format>image/svg+xml</dc:format>
                <dc:type rdf:resource="http://purl.org/dc/dcmitype/StillImage"/>
                <dc:title/>
              </cc:Work>
            </rdf:RDF>
          </metadata>
          <defs id="defs10"/>
          <sodipodi:namedview pagecolor="#ffffff" bordercolor="#666666" borderopacity="1" objecttolerance="10" gridtolerance="10" guidetolerance="10" inkscape:pageopacity="0" inkscape:pageshadow="2" inkscape:window-width="1920" inkscape:window-height="1000" id="namedview8" showgrid="false" inkscape:zoom="10.065537" inkscape:cx="0.43235341" inkscape:cy="22.19073" inkscape:window-x="-11" inkscape:window-y="-11" inkscape:window-maximized="1" inkscape:current-layer="svg6"/>
          <g id="Group_75" data-name="Group 75" transform="rotate(-90,7.6141744,20.441017)">
            <line id="Line_4" data-name="Line 4" y2="40.435001" transform="translate(20.455,12.755)" fill="none" stroke="#ab1d21" stroke-miterlimit="10" stroke-width="2" x1="0" y1="0" x2="0"/>
            <path id="Path_4" data-name="Path 4" d="m 43.05,-1271.182 a 7.429,7.429 0 0 1 7.429,-7.429" transform="translate(-22.595,1324.023)" fill="none" stroke="#ab1d21" stroke-miterlimit="10" stroke-width="2"/>
            <path id="Path_5" data-name="Path 5" d="m 30.591,-1271.182 a 7.429,7.429 0 0 0 -7.429,-7.429" transform="translate(-10.136,1324.023)" fill="none" stroke="#ab1d21" stroke-miterlimit="10" stroke-width="2"/>
          </g>
        </svg>
      </a>
    </div>
    ';

    if ($count == 4 || $count == 9){
      $output.='
      </div>
      ';
      $count_col = 0;
    }

  $count = $count + 1;
  }

  if ($count % 5 != 0){
    for ($i=0; $i < 5 - $count_col; $i++){
      $output .= '
      <div class="column" style="flex:20%; margin:0 5px 5px 5px">
      </div>
      ';
    };
  }
  $output .= '</div>';
  return $output;
}

function create_popups($connect){

  $result = make_query_cards($connect);

  while($row = mysqli_fetch_array($result)){
    echo '
    <div class="modal fade" id="machine_' . $row["machine_id"] . '">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <div class="row" style="display:flex;margin:2% 0 0 0">
              <div class="column" style="flex:20%">
                <h4 class="modal-title"><span style="font-weight:600">'.$row["machine_code"].'</span> - '.$row["machine_type"].'</h4>
              </div>
              <div class="column" style="flex:20%"> 
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              </div>
            </div>
          </div>
          <div class="modal-body">
            <div style="text-align:center">
              <img src="assets/images/'.$row["image"].'" alt="'.$row["machine_code"].'" style="width:100%;"/>
            </div>
            <div class="row" style="display:flex; margin:5% 5% 0 5%">
              <div class="column" style="flex:20%; margin:0 5px 5px 5px; padding-right:15px">
                <p style="font-size: 1.3em; margin-bottom:5px">'.$row["machine_summary"].'</p>
              </div>
              <div class="column" style="flex:20%; margin:0 5px 5px 5px">
                <p style="padding-top:5px; margin-bottom:5px"><span style="font-weight:600">Descrizione: </span>'.$row["machine_description"].'</p>
                <p style="padding-top:5px; margin-bottom:5px"><span style="font-weight:600">Lati foratura: </span>'.$row["lati_foratura"].'</p>
                <p style="padding-top:5px; margin-bottom:5px"><span style="font-weight:600">Num. mandrini: </span>'.$row["num_mandrini"].'</p>
                <p style="padding-top:5px; margin-bottom:5px"><span style="font-weight:600">Cambio utensili: </span>'.$row["cambio_utensili"].'</p>
                <p style="padding-top:5px; margin-bottom:5px"><span style="font-weight:600">Pantografo: </span>'.$row["pantografo"].'</p>
              </div>
              <div class="column" style="flex:20%; margin:0 5px 5px 5px">
                <p style="padding-top:5px; margin-bottom:15px"><span style="font-weight:600">Gruppi: </span>'.$row["gruppi"].'</p>
                <a href="" class="btn btn-primary" style="background-color:#FFFFFF00; color:#AB1D21; border-color:#AB1D21; font-weight:600; border-radius:100px; margin-bottom:15px">
                  Contattaci
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    ';
  }
}

?>