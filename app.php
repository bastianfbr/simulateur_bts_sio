<?php
  if(isset($_GET['submit']))
  {
    $culture = $_GET['culture'] * 2;
    $anglais = $_GET['anglais'] * 2;
    $maths_ecrit = $_GET['maths_ecrit'] * 2;
    $maths_algo = $_GET['maths_algo'];
    $cejm = $_GET['cejm'] * 3;
    $e4 = $_GET['e4'] * 4;
    $e5 = $_GET['e5'] * 4;
    $e6 = $_GET['e6'] * 4;
    $lv2 = $_GET['lv2'];
    $math_app = $_GET['math_app'];
    $certif = $_GET['certif'];
    $engagement = $_GET['engagement'];
    $total = $culture + $anglais + $maths_ecrit + $maths_algo + $cejm + $e4 + $e5 + $e6;
    if ($lv2 > 10) {
        $lv2 = $lv2 - 10;
        $total = $total + $lv2;
    }
    if ($math_app > 10) {
        $math_app = $math_app - 10;
        $total = $total + $math_app;
    }
    if ($certif > 10) {
        $certif = $certif - 10;
        $total = $total + $certif;
    }
    if ($engagement > 10) {
        $engagement = $engagement - 10;
        $total = $total + $engagement;
    }
    $moyenne = $total / 22;
echo "
																							<script type=\"text/javascript\">
    document.addEventListener(\"DOMContentLoaded\", function() {
    var note = document.getElementById(\"note\");
    note.innerHTML = \"$moyenne\";
    });
</script>"; 
  }
?>
