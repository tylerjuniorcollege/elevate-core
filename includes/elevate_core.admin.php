<?php
    /**
     * Admin Pages for the Elevate API Drupal Module.
     *
     * Makes extensive use of the Form API
     **/
    
    use ElevateAPI\Client as ElevateClient;
    use ElevateAPI\Query\Common as ElevateQueryCommon;
    
    // Main page to run the populate action in the module.
    function elevate_core_admin_populate($form, &$form_state) {
        $form['submit'] = array(
            '#type' => 'submit',
            '#value' => 'Populate From Elevate'
        );
        return $form;
    }
    
    function elevate_core_admin_populate_submit($form, &$form_state) {
        $query = new ElevateQueryCommon();
        var_dump(elevate_client($query));
        die();
    }