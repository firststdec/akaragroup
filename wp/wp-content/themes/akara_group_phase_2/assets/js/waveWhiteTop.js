(function () {
	"use strict";

	var cvs, ctx;
	var nodes = 4;
	var waves = [];
	var waveHeight = 150;
	var colours = ["#fff"];

	// Initiator function
	function init() {
		cvs = document.getElementById("canvas-white-top");
		ctx = cvs.getContext("2d");

		resizeCanvas(cvs);

		for (var i = 0; i < 1; i++) {
			waves.push(new wave(colours[i], 1, nodes));
		}

		// console.log(waves);

		update();
	}

	function update() {
		// var fill = window.getComputedStyle(document.querySelector(".sec-cmn-01"),null).getPropertyValue("background-color");
		var fill = '#fff';
		ctx.fillStyle = fill;
		ctx.globalCompositeOperation = "copy";
		ctx.fillRect(0, 0, cvs.width, cvs.height);
		ctx.globalCompositeOperation = "copy";
		for (var i = 0; i < waves.length; i++) {
			for (var j = 0; j < waves[i].nodes.length; j++) {
				bounce(waves[i].nodes[j]);
			}
			drawWave(waves[i]);
		}
		ctx.fillStyle = fill;

		requestAnimationFrame(update);
	}

	function wave(colour, lambda, nodes) {

		this.colour = colour;
		this.lambda = lambda;
		this.nodes = [];
		var tick = 1;

		for (var i = 0; i <= nodes + 2; i++) {
			var temp = [(i - 1) * cvs.width / nodes, 0, Math.random() * 200, .3];
			this.nodes.push(temp);
			// console.log(temp);
		}
		// console.log(this.nodes);
	}

	function bounce(nodeArr) {
		nodeArr[1] = waveHeight / 2 * Math.sin(nodeArr[2] / 40) + cvs.height / 2;
		nodeArr[2] = nodeArr[2] + nodeArr[3];

	}

	function drawWave(obj) {

		var diff = function (a, b) {
			return (b - a) / 2 + a;
		}

		ctx.fillStyle = [obj.colour];
		ctx.beginPath();
		ctx.moveTo(0, cvs.height);
		ctx.lineTo(obj.nodes[0][0], obj.nodes[0][1]);

		for (var i = 0; i < obj.nodes.length; i++) {

			if (obj.nodes[i + 1]) {
				ctx.quadraticCurveTo(
					obj.nodes[i][0], obj.nodes[i][1],
					diff(obj.nodes[i][0], obj.nodes[i + 1][0]), diff(obj.nodes[i][1], obj.nodes[i + 1][1])
				);
			} else {
				ctx.lineTo(obj.nodes[i][0], obj.nodes[i][1]);
				ctx.lineTo(cvs.width, cvs.height);
			}
		}
		ctx.closePath();
		ctx.fill();

	}

	function drawNodes(array) {
		ctx.strokeStyle = "#888";

		for (var i = 0; i < array.length; i++) {
			ctx.beginPath();
			ctx.arc(array[i][0], array[i][1], 4, 0, 2 * Math.PI);
			ctx.closePath();
			ctx.stroke();
		}

	}

	function drawLine(array) {
		ctx.strokeStyle = "#888";

		for (var i = 0; i < array.length; i++) {

			if (array[i + 1]) {
				ctx.lineTo(array[i + 1][0], array[i + 1][1]);
			}
		}

		ctx.stroke();
	}

	function resizeCanvas(canvas, width, height) {

		if (width && height) {
			canvas.width = width;
			canvas.height = height;
		} else {

			if (window.innerWidth > 2560) {
				canvas.width = window.innerWidth;
			} else {
				canvas.width = 2560;
			}

			canvas.height = waveHeight;
		}
	}

	document.addEventListener("DOMContentLoaded", init, false);
})();