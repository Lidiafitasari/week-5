<?php 

	include_once 'database.php';

	class dosen {
		public $db;
		public $table = 'dosen';

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
			$query = "insert into $this->table value(:nip, :nama, :makul)";
			$sql = $this->db->prepare($query);
			$sql->execute($data);
		}

		function find($data) {
			$query = "select*from $this->table where nip=:nip";
			$sql = $this->db->prepare($query);
			$sql->execute($data);
			return $sql->fetch();
		}

		function update($data) {
			$query = "update $this->table set nama=:nama, makul=:makul where nip=:nip";
			$sql = $this->db->prepare($query);
			$sql->execute($data);
		}

		function delete($data) {
			$query = "delete from $this->table where nip=:nip";
			$sql = $this->db->prepare($query);
			$sql->execute($data);
		}
	}
?>