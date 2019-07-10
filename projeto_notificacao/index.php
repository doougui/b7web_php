<!DOCTYPE html>
<html>
<head>
	<title>Projeto: Notificações Internas</title>
	<meta charset="UTF-8">
	<style>
		.notificacoes {
			width: 20px;
			height: 20px;
			font-size: 11px;
			line-height: 20px;
			background-color: #465052;
			color: #999;
			border-radius: 50%;
			text-align: center;
			cursor: pointer;
		}
		.tem_notif {
			background-color: red;
			color: white;
		}
		.box_notif {
			display: none;
		}
	</style>
</head>
<body>
	<div class="notificacoes">0</div>
	<hr>
	<button class="add_notif">Criar notificação</button>
	<hr>
	<div class="box_notif"><h2>Você não tem notificações</h2></div>

	<!-- JavaScript -->
	<script src="jquery-3.4.1.min.js"></script>
	<script src="script.js"></script>
</body>
</html>