<?php 

/**
* Plugin Name: React Form
*/


function load_form($atts) {
	


$html = '
<!DOCTYPE html>
<html>
<head>
    <title>Developer Quiz</title>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/react/15.4.2/react.js" charset="utf-8"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/react/15.4.2/react-dom.js" charset="utf-8"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/babel-standalone/6.21.1/babel.min.js" charset="utf-8"></script>
    <script type="text/babel" src="'.plugin_dir_url( __FILE__ ).'react_form.js" charset="utf-8"></script>

    <style>
        .quiz {
            display: block;
            background: linear-gradient(to bottom, #2a86d6 0%,#7db9e8 100%);
            padding: 40px;
            color: #ffffff;
        }

        .quiz button {
            display: block;
            margin-bottom: 10px;
            color: #000000;
        }

        .quiz .correct {
            background-color: #ffffff;
            padding: 5px;
            color: #11AF08;
            font-weight: bold;
        }

        .quiz .incorrect {
            background-color: #ffffff;
            padding: 5px;
            color: #FF0C0C;
            font-weight: bold;
        }
        #myformWrap{
            padding: 30px;
            max-width: 600px;
            background: #efefef;
            margin: 0 auto;
            margin-top: 20px;
            margin-bottom: 20px;
            clear:both;
        }
        #myformWrap h2{
            font-size: 18px;
            text-align: center;
            font-weight: bold;
            color: #333;
            margin-bottom: 32px;
        }
        #myform{
            margin: 0 auto;
        }
        #myform span{
            color: red;
            font-size: 14px;
        }
        #myform h5{
            color: green;
            font-size: 14px;
        }
        #myform p{
            clear: both;
            height: 30px;
        }
        #myform input[type="submit"]{
            background: #00405C; color: #fff; text-decoration: none;
        }
        #myform div{
            max-width: 370px;
            margin-top: 7px;
            padding: 0px;
            /* display: table; */
            margin: 0;
            float: left;
            font-size: 10px;
        }
        #myform div input[type="text"]{
            width: 370px !important;
        }
        #myform div a{
            color: skyblue;
            text-decoration: underline;
            
        }
        #myform label{
            float: left;
            position: relative;
            top: 12px;
            width: 150px;
            font-weight: normal;
        }
        .news_images div{
            width:160px;border-right: 1px solid #efefef; float: left;
        }
        .news_images img{
            width: 95%;
            object-fit: contain;
            height: 60px;
        }
        div.last_image{
            border-right: none !important;
        }
        .bottomSpanner{
	        font-family: "Meie Script", cursive; font-size: 24px;
        }
        .bottomDiv{
        	background: #00405C; padding: 10px 5px 10px 5px; color:#fff; text-align:center; font-size:16px;clear:both;
        }
        div.news_images{
                max-width: 640px;
            }
        div.toptop{
            margin-bottom:10px;margin-top:10px;
        }
        @media (min-width: 481px) and (max-width: 767px) {
  
          #myformWrap{
            padding: 30px;
            max-width: 100%;
            background: #efefef;
            margin: 0 auto;
            margin-top: 20px;
            margin-bottom: 20px;
            clear:both;
            }
            
            #myform div{
                width: 100%;
                
            }
            #myform div input[type="text"]{
                width: 100% !important;
            }
            #myform div a{
                color: skyblue;
                text-decoration: underline;
                
            }
            #myform label{
                float: left;
                position: relative;
                top: 12px;
                width: 100%;
                font-weight: normal;
            }
            .has-text-align-center{
                padding-left: 7px;
                padding-right: 7px;
            }
            div.news_images{
                max-width: 480px;
            }
            div.third_image{
                border-top: 1px solid #efefef;
            }
            div.last_image{
                border-right: none;
                border-top: 1px solid #efefef;
            }
            div.second_image{
                border-right: none;
            }
            div.toptop span{
                font-size:12px;
            } 
            div.toptop span b{
                position:relative;
                top:3px;
            } 
          
        }
        
        /* 
          ##Device = Most of the Smartphones Mobiles (Portrait)
          ##Screen = B/w 320px to 479px
        */
        
        @media (min-width: 320px) and (max-width: 480px) {
          
         #myformWrap{
            padding: 30px;
            max-width: 100%;
            background: #efefef;
            margin: 0 auto;
            margin-top: 20px;
            margin-bottom: 20px;
            clear:both;
            }
            
            #myform div{
                width: 100%;
                
            }
            #myform div input[type="text"]{
                width: 100% !important;
            }
            #myform div a{
                color: skyblue;
                text-decoration: underline;
                
            }
            #myform label{
                float: left;
                position: relative;
                top: 12px;
                width: 100%;
                font-weight: normal;
            }
            .has-text-align-center{
                padding-left: 7px;
                padding-right: 7px;
            }
            div.news_images{
                max-width: 326px;
            }
            div.third_image{
                border-top: 1px solid #efefef;
            }
            div.last_image{
                border-right: none;
                border-top: 1px solid #efefef;
            }
            div.second_image{
                border-right: none;
            }
            div.toptop span{
                font-size:12px;
            } 
            div.toptop span b{
                position:relative;
                top:3px;
            } 
          
        }
    </style>
</head>
<body>
<div class="row" id="myformWrap">
    <div id="myform"></div>
</div>
    
</body>
</html>';

return $html;
 } 


add_shortcode("REACT-FORM", load_form);