<?php

namespace MyWS\Data;

interface TransformerInterface
{
	public function transform();

	protected function convert();

	protected function transfDistance();

	protected function transfTemperature();

	protected function transfPressure();

	protected function transfRainfall();

	protected function transfWind();
}
