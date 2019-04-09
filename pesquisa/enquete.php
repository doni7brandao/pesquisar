<?php
header("content-type: text/plain; charset=utf-8");

class Enquete {

	const TO = "donizetebrand@gmail.com";
	const SUBJECT = "Pesquisa de Satisfação";
	const HEADER = "from: guerradelbarco@gmail.com";

	private $answer;

	private function get_answer() {

		$date = date("d/m/Y H:i:s");
		$answer1 = (isset($_POST["answer1"]) && $_POST["answer1"] != "") ? $_POST["answer1"] : "---";
		$answer2 = (isset($_POST["answer2"]) && $_POST["answer2"] != "") ? $_POST["answer2"] : "---";
		$answer3 = (isset($_POST["answer3"]) && $_POST["answer3"] != "") ? $_POST["answer3"] : "---";
		$this->answer = $date . "\nPergunta 1: Com que frequência você acessa o site Baixa Grande News?\n" . $answer1 . "\nPergunta 2: Qual sua opinião sobre o site Baixa Grande News?\n" . $answer2 . "\nPergunta 3: Qual a chance de você recomendar o nosso site?\n" . $answer3. "\n\n";

		$this->put_file();

	}

	private function put_file() {

		$fp = fopen("answer.txt", "a");

		fwrite($fp, $this->answer);
		fclose($fp);

		$this->send_mail();

	}

	private function send_mail() {

		mb_language("portuguese");
		mb_internal_encoding("utf-8");
		mb_send_mail(
			self::TO,
			self::SUBJECT,
			$this->answer,
			self::HEADER
		);

	}

	public function init() {

		$this->get_answer();

	}

}

$enquete = new Enquete();
$enquete->init();
?>