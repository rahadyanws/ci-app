<?php
if ($this->session->userdata('logged_in')):
    echo '<h2>Logout</h2>';
    echo form_open('users/logout');
    if ($this->session->userdata('username')):
        echo "<p>You are logged as " . $this->session->userdata('username') . "<p>";
    endif;
    $data = array(
        'class' => 'btn btn-primary',
        'name' => 'submit',
        'value' => 'Logout',
    );
    echo form_submit($data);
    echo form_close();
else:
    ?>
    <h2>Login FORM</h2>
    <?php
    $attributes = array('id' => 'login_form', 'class' => 'form_horizontal');

    if ($this->session->flashdata('errors')):
        echo $this->session->flashdata('errors');
    endif;

    echo form_open('users/login', $attributes);
    ?>

    <div class="form-group">
        <?php
        echo form_label('Username');
        $data = array(
            'class' => 'form-control',
            'name' => 'username',
            'placeholder' => 'Enter Username',
        );
        echo form_input($data);
        ?>
    </div>

    <div class="form-group">
        <?php
        echo form_label('Password');
        $data = array(
            'class' => 'form-control',
            'name' => 'password',
            'placeholder' => 'Enter Password',
        );
        echo form_password($data);
        ?>
    </div>

    <div class="form-group">
        <?php
        echo form_label('Confirm Password');
        $data = array(
            'class' => 'form-control',
            'name' => 'confirm_password',
            'placeholder' => 'Confirm Password',
        );
        echo form_password($data);
        ?>
    </div>

    <div class="form-group">
        <?php
        $data = array(
            'class' => 'btn btn-primary',
            'name' => 'submit',
            'value' => 'Login',
        );
        echo form_submit($data);
        ?>
    </div>
    <?php
    echo form_close();
endif;
?>