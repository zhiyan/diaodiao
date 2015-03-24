<?php
   
   $action = trim($_GET['action']);
   
   require_once("api1.php");
   

    switch($action){
        case 'all':
            echo json_encode(getAll());  
            break;
        
        case 'set':
        
            $answers = $_POST['answers'];
            $exam_json = generateExamJSON(getAll(), $answers);

            $openid = trim($_POST['openid']);
            $nick = trim($_POST['nick']);
            $head = trim($_POST['head']);
            
            if (empty($openid) || empty($nick) || empty($head)){
                echo "NULL";
                break;    
            }
            
            $exam_id = saveExam($exam_json, $openid, $nick, $head);
            
            $arr = array("result" => "true");
            
            if($exam_id == false) {
                $arr["result"] = "false";
            } else {
                $arr['exam_id'] = $exam_id;
            }
            
            echo json_encode($arr);
            
            break; 
        
        case 'get':

            $exam_id = $_GET['id'];
            $openid = trim($_GET['openid']);
            
            $exam_json = getExam($exam_id);
            $exam_json['answerd'] = existScore($exam_id,$openid);
           
            echo json_encode($exam_json);
            
            break;
       
        case 'ans': 
            
            $head = trim($_POST['head']);
            $exam_id = $_POST['exam_id'];
            $nick = trim($_POST['nick']);
            $openid = trim($_POST['openid']);
            $score = $_POST['score'];
            
            if (empty($openid) || empty($nick) || empty($head)){
                echo "NULL";
                break;    
            }
           
            saveScore($exam_id, $openid, $nick, $head, $score);
           
            echo "{'state':1}";
            
            break;

        case 'rank':
            
            $exam_id = $_GET['exam_id'];
            $rank = getScore($exam_id);
            $exam = getExam($exam_id);
                          
            echo json_encode(array('exam'=>$exam,'rank'=>$rank));
            
            break; 
        default:    
    }

?>
