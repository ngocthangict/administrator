<?php
class FuncController extends Controller{
    
    function get_index(){
        ?>
        <form action="" method="POST">
            <input type="text" value="dá" />
        </form>
        <?php
    }
    
    function get_show(){
        echo "show";
    }
}