<!-- Snack 5
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. -->

<?php 

    $paragrafo = 'Lrem ipsum dolor sit amet consectetur adipisicing elit. Eaque blanditiis nam excepturi nisi! Non esse ad optio soluta voluptatem sapiente illum accusamus laudantium, ipsa rerum est officia ipsum voluptas. Nam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque blanditiis nam excepturi nisi! Non esse ad optio soluta voluptatem sapiente illum accusamus laudantium, ipsa rerum est officia ipsum voluptas. Nam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque blanditiis nam excepturi nisi! Non esse ad optio soluta voluptatem sapiente illum accusamus laudantium, ipsa rerum est officia ipsum voluptas. Nam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque blanditiis nam excepturi nisi! Non esse ad optio soluta voluptatem sapiente illum accusamus laudantium, ipsa rerum est officia ipsum voluptas. Nam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque blanditiis nam excepturi nisi! Non esse ad optio soluta voluptatem sapiente illum accusamus laudantium, ipsa rerum est officia ipsum voluptas. Nam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque blanditiis nam excepturi nisi! Non esse ad optio soluta voluptatem sapiente illum accusamus laudantium, ipsa rerum est officia ipsum voluptas. Nam.';

    //print_r(explode('.', $paragrafo));    

    echo "<pre>";
        print_r(explode(".", $paragrafo));
    echo "</pre>";

    // Soluzione più corretta

    // for($i=0; $i<count($paragrafo); $i++){
           //echo "<p>";
    //     echo $paragrafo[$i];
           //echo "</p>";
    // }    
?>