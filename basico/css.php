<div class="titulo">Integração CSS</div>

<h1>

<?php 
echo 'Olá ';
echo '<small>';
echo 'Mundo';
echo '</small>';
?>

</h1>

<?= "<div> Outra forma de me expressar!</div>"?>

<br>
<div><button><?='Legal'?></button></div>

<style>
    button{
        padding: 5px <?= 2 * 10 ?>px;
        background-color: #4286f4;
        color: #eee;
        font-weight: bold;
        border-radius: 10px;
    }
</style>