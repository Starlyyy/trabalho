<?php 

class Card {
    private $nome;
    private $nomeDiretor;
    private $anoLancamento;
    private $linkImg;

    public function __construct($n, $nD, $a, $l) {
        $this->nome = $n;
        $this->nomeDiretor = $nD;
        $this->anoLancamento = $a;
        $this->linkImg = $l;
    }

    public function gerarCard(){
        echo "<div style='border: solid 1px; width: 300px; margin-top: 20px;'>
                    " . $this->nome . " <br>
                    " . $this->nomeDiretor . "<br>
                    " . $this->anoLancamento . "<br>
                    <img style='width: 100%; height: auto;' src='" . $this->linkImg. "' /><br>
              </div>
              
              <br><a href='filme_formulario.php'>Voltar</a>";
    }

    

    /**
     * Get the value of nome
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of nomeDiretor
     */
    public function getNomeDiretor()
    {
        return $this->nomeDiretor;
    }

    /**
     * Set the value of nomeDiretor
     */
    public function setNomeDiretor($nomeDiretor): self
    {
        $this->nomeDiretor = $nomeDiretor;

        return $this;
    }

    /**
     * Get the value of anoLancamento
     */
    public function getAnoLancamento()
    {
        return $this->anoLancamento;
    }

    /**
     * Set the value of anoLancamento
     */
    public function setAnoLancamento($anoLancamento): self
    {
        $this->anoLancamento = $anoLancamento;

        return $this;
    }

    /**
     * Get the value of linkImg
     */
    public function getLinkImg()
    {
        return $this->linkImg;
    }

    /**
     * Set the value of linkImg
     */
    public function setLinkImg($linkImg): self
    {
        $this->linkImg = $linkImg;

        return $this;
    }
}
