<? $this->load->view('templates/header'); ?>
<? $this->load->view('navigation/adminNav'); ?>

<div class="container">
    <center>
        <h1>Gestion de Présences / Absences</h1>
        <hr class="hr_1"/>
    </center>
    <div class="row">
        <div class="col-sm-3">
            <div class="hero-widget well well-sm">
                <div class="icon">
                    <i class="glyphicon glyphicon-user"></i>
                </div>
                <div class="text">
                    <var>3</var>
                    <label class="text-muted">invited guests</label>
                </div>
                <div class="options">
                    <a href="javascript:;" class="btn btn-primary btn-lg"><i class="glyphicon glyphicon-plus"></i> Add a guest</a>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="hero-widget well well-sm">
                <div class="icon">
                    <i class="glyphicon glyphicon-star"></i>
                </div>
                <div class="text">
                    <var>614</var>
                    <label class="text-muted">page likes</label>
                </div>
                <div class="options">
                    <a href="javascript:;" class="btn btn-default btn-lg"><i class="glyphicon glyphicon-search"></i> View traffic</a>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="hero-widget well well-sm">
                <div class="icon">
                    <i class="glyphicon glyphicon-tags"></i>
                </div>
                <div class="text">
                    <var>73</var>
                    <label class="text-muted">total orders</label>
                </div>
                <div class="options">
                    <a href="javascript:;" class="btn btn-default btn-lg"><i class="glyphicon glyphicon-search"></i> View orders</a>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="hero-widget well well-sm">
                <div class="icon">
                    <i class="glyphicon glyphicon-cog"></i>
                </div>
                <div class="text">
                    <var>75%</var>
                    <label class="text-muted">profile complete</label>
                </div>
                <div class="options">
                    <a href="javascript:;" class="btn btn-default btn-lg"><i class="glyphicon glyphicon-wrench"></i> Edit profile</a>
                </div>
            </div>
        </div>
    </div>
</div>

<? $this->load->view('templates/footer'); ?>