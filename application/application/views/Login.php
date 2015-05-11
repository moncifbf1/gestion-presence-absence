<? $this->load->view('templates/header'); ?>

<div class="container contLog">
    <center>
        <img src="<?php echo base_url()?>assets/img/logo.png" alt="Logo Iga El Jadida"/>
    </center>
    <br/>
    <?php echo form_open('index.php/Login/go'); ?>
        <div class="form-group">
            <label for="login">Nom d'utilisateur:</label>
            <input type="text" class="form-control" id="login" name="loginUser" placeholder="Login...">
        </div>
        <div class="form-group">
            <label for="password">Mot de passe:</label>
            <input type="password" class="form-control" id="password" name="passUser" placeholder="Mot de passe...">
        </div>

        <center>
            <button type="submit" class="btn btn-primary">Se connecter</button>
        </center>
    </form>
</div>

<? $this->load->view('templates/footer'); ?>