<?php
vc_map( array(
      "name" => __( "Asif Statics box", "my-text-domain" ),
      "base" => "asif_stat",
      "category" => __( "Asif", "my-text-domain"),
      "params" => array(
         array(
            "type" => "textfield",
            "heading" => __( "Static Number", "my-text-domain" ),
            "param_name" => "number",
            "description" => __( "", "my-text-domain" ),
         ),
         array(
            "type" => "textfield",
            "heading" => __( "Static Number after text", "my-text-domain" ),
            "param_name" => "after_text",
            "description" => __( "", "my-text-domain" ),
         ),
         array(
            "type" => "textfield",
            "heading" => __( "Static Desc", "my-text-domain" ),
            "param_name" => "desc",
            "description" => __( "", "my-text-domain" ),
         ),
      )
   ) );
