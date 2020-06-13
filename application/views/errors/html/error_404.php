<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Página não encontrada</title>
	<link rel="stylesheet" href="assets/css/style.css">
	<style>
		/* import */
		@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&display=swap');

		/* browser reset */
		* {
			box-sizing: border-box;
			margin: 0;
			padding: 0;
		}

		html {
			height: 100%;
		}

		img {
			display: block;
			max-width: 100%;
		}

		h1,
		h2,
		h3,
		h4,
		h5,
		h6,
		p,
		ol,
		ul,
		li,
		figure,
		video {
			margin: 0;
			padding: 0;
		}

		*:focus {
			outline: none;
		}

		:root {
			--white: #fff;
			--black: #000;
			--pastel: #e0e0e0;
		}

		::selection {
			background: var(--black);
			color: var(--white);
		}

		body {
			background: var(--pastel);
			font-family: 'Montserrat', sans-serif;
			font-size: 10px;
			letter-spacing: .05em;
			font-weight: 300;
			line-height: 1.6;
			color: var(--black);
			-webkit-font-smoothing: antialiased;
			-moz-osx-font-smoothing: auto;
		}

		main {
			width: 90%;
			max-width: 600px;
			height: 100vh;
			margin: auto;
			display: flex;
			flex-flow: column;
			justify-content: center;
		}

		h1 {
			font-size: 8em;
			line-height:1;
			letter-spacing: .1em;
			color: var(--white);
		}

		p{
			font-size: 2.4em;
			margin: 2em 0;
		}

		.btn {
			display: inline-block;
			color: var(--black);
			background: var(--white);
			text-decoration: none;
			font-size: .8em;
			padding: .5em 1em;
			letter-spacing: 2px;
			transition: all .6s ease-in-out;
		}

		.btn:hover {
			background: var(--black);
			color: var(--white);
		}

	</style>
</head>
<body>
	<main>
		<h1>. Pensamento Avulso</h1>
		<p>Ohhh!!! Onde anda esta página?</p>
		<p><a href="criacoes" class="btn">voltar</a></p>
	</main>
</body>
</html>