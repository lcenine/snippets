<?php


function add_tml_registration_form_fields() {
        tml_add_form_field( 'register', 'CustomerRole', array(
                'type'     => 'text',
                'label'    => 'Customer Role',
                'value'    => tml_get_request_value( 'CustomerRole', 'post' ),
                'id'       => 'CustomerRole',
                'priority' => 15,
        ) );


}
add_action( 'init', 'add_tml_registration_form_fields' );




function save_tml_registration_form_fields( $user_id ) {
        if ( ! empty( $_POST['CustomerRole'] ) ) {
                update_user_meta( $user_id, 'CustomerRole', $_POST['CustomerRole'] );

        }

}
add_action( 'user_register', 'save_tml_registration_form_fields' );
add_action('personal_options_update', 'save_tml_registration_form_fields' );
add_action('edit_user_profile_update','save_tml_registration_form_fields' );
