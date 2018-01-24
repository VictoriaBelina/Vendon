<?php
function get_test_data($test_id) {
	if ( !'test_id' ) return;
	global $db;
	$sql = "SELECT q.question, q.id_test, a.answer_id, a.answer, a.question_id, a.correct_answer
	  FROM tests_questions q
	    LEFT JOIN tests_answers a
	      ON q.question_id = a.question_id
	        WHERE q.id_test = $test_id";
	$result = mysqli_query($db, $sql);
	$data = null;
	While ( $row = $result->fetch_assoc()){
		if( !$row['question_id']) return false;
		$data[$row['question_id']][0] = $row['question'];
		$data[$row['question_id']][$row['answer_id']] = $row['answer'];
	}
	return $data;

}