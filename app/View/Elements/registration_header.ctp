<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login Form</title>
    
    <!-- core CSS -->
            <?php 
            //echo $this->Html->css('front/bootstrap');
            echo $this->Html->css('front/bootstrap.min');
            ?>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
            <script src="https://code.jquery.com/jquery.min.js"></script>
            
            <?php
            echo $this->Html->css('front/brain');
            echo $this->Html->css('front/check_box');
            echo $this->Html->css('front/style1');
            echo $this->Html->css('front/style_g');
            echo $this->Html->css('front/bootstrap-multiselect');
            echo $this->Html->css('front/datepicar');

           //echo $this->Html->script('front/jquery.min');
            //echo $this->Html->script('jquery-2.1.4');
            
            ?>
            <script src="https://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
            <?php
            echo $this->Html->script('bootstrap-multiselect');
            echo $this->Html->script('datepicar');

            
            ?>
           
            
<style>
 option:hover, 
         option:focus, 
        option:active, 
         option:checked
            {
                background: linear-gradient(#33B9B4,#33B9B4);
                background-color: #33B9B4; /* for IE */
            }
 option:hover, 
         option:focus, 
        option:active, 
         option:checked
            {
                background: linear-gradient(#33B9B4,#33B9B4);
                background-color: #33B9B4; /* for IE */
            }

            input:-moz-placeholder { /* Firefox 18- */
                color: #555 !important;  
                }
                 
                input::-moz-placeholder {  /* Firefox 19+ */
                color: #555 !important;  
                }
                 
                input:-ms-input-placeholder {  
                color: #555 !important;  
                }
                input::-webkit-input-placeholder {
                    color: #555 !important;  
                }
                .btn-group > .btn:first-child {
                        margin-left: 0px;
                        height: 45px;
                       /*border-color: #f;*/
                       border: 2px solid #959595;
                       border-radius: 10px;
                    
                    }
                .btn-group, .btn-group-vertical {
                    position: relative;
                    display: inline-block;
                    vertical-align: middle;
                    width: 100%;
                    }
                    
                .btn-group > .btn {
                    position: relative;
                    float: left;
                    width: 100%;
                    }
                    .dropdown-menu{
                    height: 300px;
                    overflow-y: scroll;
                }
                .multiselect-selected-text {
                        float: left;
                    }
                    .btn .caret {
                    margin-left: 6px;
                    float: right;
                    margin-top: 7px;
                    display: none;
                }
</style>            
</head><!--/head-->
<body>