<?php
namespace PhpSigep\Model;

/**
 * @author: Stavarengo
 */
class CalcPrecoPrazo extends AbstractModel
{

	/**
	 * @var AccessData
	 */
	protected $accessData;

	/**
	 * @var ServicoDePostagem[]
	 */
	protected $servicosPostagem;

	/**
	 * @var string
	 */
	protected $cepOrigem;
	/**
	 * @var string
	 */
	protected $cepDestino;
	/**
	 * Peso da encomenda, incluindo sua embalagem. O peso deve ser informado em quilogramas.
	 * Se o formato for Envelope ({@link \PhpSigep\Model\Dimensao::TIPO_ENVELOPE}), o valor máximo permitido será 1 kg.
	 * @var float
	 */
	protected $peso;
	/**
	 * @var Dimensao
	 */
	protected $dimensao;
	/**
	 * @var ServicoAdicional[]
	 */
	protected $servicosAdicionais;

	/**
	 * @param \PhpSigep\Model\AccessData $accessData
	 */
	public function setAccessData($accessData)
	{
		$this->accessData = $accessData;
	}

	/**
	 * @return \PhpSigep\Model\AccessData
	 */
	public function getAccessData()
	{
		return $this->accessData;
	}

	/**
	 * @param string $cepDestino
	 */
	public function setCepDestino($cepDestino)
	{
		$this->cepDestino = $cepDestino;
	}

	/**
	 * @return string
	 */
	public function getCepDestino()
	{
		return $this->cepDestino;
	}

	/**
	 * @param string $cepOrigem
	 */
	public function setCepOrigem($cepOrigem)
	{
		$this->cepOrigem = $cepOrigem;
	}

	/**
	 * @return string
	 */
	public function getCepOrigem()
	{
		return $this->cepOrigem;
	}

	/**
	 * @param \PhpSigep\Model\Dimensao $dimensao
	 */
	public function setDimensao($dimensao)
	{
		$this->dimensao = $dimensao;
	}

	/**
	 * @return \PhpSigep\Model\Dimensao
	 */
	public function getDimensao()
	{
		return $this->dimensao;
	}

	/**
	 * @param float $peso
	 */
	public function setPeso($peso)
	{
		$this->peso = $peso;
	}

	/**
	 * @return float
	 */
	public function getPeso()
	{
		return $this->peso;
	}

	/**
	 * @param \PhpSigep\Model\ServicoDePostagem[] $servicosPostagem
	 */
	public function setServicosPostagem($servicosPostagem)
	{
		$this->servicosPostagem = $servicosPostagem;
	}

	/**
	 * @return \PhpSigep\Model\ServicoDePostagem[]
	 */
	public function getServicosPostagem()
	{
		return $this->servicosPostagem;
	}

	/**
	 * @param \PhpSigep\Model\ServicoAdicional[] $servicosAdicionais
	 */
	public function setServicosAdicionais($servicosAdicionais)
	{
		$this->servicosAdicionais = $servicosAdicionais;
	}

	/**
	 * @return \PhpSigep\Model\ServicoAdicional[]
	 */
	public function getServicosAdicionais()
	{
		return $this->servicosAdicionais;
	}

}
