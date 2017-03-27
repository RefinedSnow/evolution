<!DOCTYPE html>
<html lang="en">
    <?php
        $this->load->view("template/head");
    ?>
    <body>
        <?php
            $this->load->view("template/nav-top");
            $this->load->view("template/main", $page);
        	$this->load->view("template/footer");
        ?>
    </body>
</html>
