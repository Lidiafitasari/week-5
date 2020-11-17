<?php 

	include_once 'database.php';

	class mahasiswa {
		public $db;
		public $table = 'mahasiswa';

		function __construct() {
			$this->db = createDBConnection();
		}

		function all() {
			$query = "select*from $this->table";
			$sql = $this->db->prepare($query);
			$sql->execute();
			return $sql->fetchAll();
		}

		function store($data) {
			$query = "insert into $this->table value(:nim, :nama, :angkatan)";
			$sql = $this->db->prepare($query);
			$sql->execute($data);
		}

		function find($data) {
			$query = "select*from $this->table where nim=:nim";
			$sql = $this->db->prepare($query);
			$sql->execute($data);
			return $sql->fetch();
		}

		function update($data) {
			$query = "update $this->table set nama=:nama, angkatan=:angkatan where nim=:nim";
			$sql = $this->db->prepare($query);
			$sql->execute($data);
		}

		function delete($data) {
			$query = "delete from $this->table where nim=:nim";
			$sql = $this->db->prepare($query);
			$sql->execute($data);
		}
	}
?>