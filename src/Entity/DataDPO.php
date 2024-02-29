<?php

namespace App\Entity;

use App\Repository\DataDPORepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: DataDPORepository::class)]
class DataDPO
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: "integer")]
    private ?int $id = null;

    #[ORM\Column(type: "string", length: 255, nullable: true)]
    private $sirenOrganismeDesignant;

    #[ORM\Column(type: "string", length: 255, nullable: true)]
    private $nomOrganismeDesignant;

    #[ORM\Column(type: "string", length: 255, nullable: true)]
    private $secteurActiviteOrganismeDesignant;

    #[ORM\Column(type: "string", length: 5, nullable: true)]
    private $codeNafOrganismeDesignant;

    #[ORM\Column(type: "string", length: 255, nullable: true)]
    private $adressePostaleOrganismeDesignant;

    #[ORM\Column(type: "string", length: 10, nullable: true)]
    private $codePostalOrganismeDesignant;

    #[ORM\Column(type: "string", length: 255, nullable: true)]
    private $villeOrganismeDesignant;

    #[ORM\Column(type: "string", length: 255, nullable: true)]
    private $paysOrganismeDesignant;

    #[ORM\Column(type: "string", length: 255, nullable: true)]
    private $typeDpo;

    #[ORM\Column(type: "date", nullable: true)]
    private $dateDesignation;

    #[ORM\Column(type: "string", length: 9, nullable: true)]
    private $sirenOrganismeDesigne;

    #[ORM\Column(type: "string", length: 255, nullable: true)]
    private $nomOrganismeDesigne;

    #[ORM\Column(type: "string", length: 255, nullable: true)]
    private $secteurActiviteOrganismeDesigne;

    #[ORM\Column(type: "string", length: 5, nullable: true)]
    private $codeNafOrganismeDesigne;

    #[ORM\Column(type: "string", length: 255, nullable: true)]
    private $adressePostaleOrganismeDesigne;

    #[ORM\Column(type: "string", length: 10, nullable: true)]
    private $codePostalOrganismeDesigne;

    #[ORM\Column(type: "string", length: 255, nullable: true)]
    private $villeOrganismeDesigne;

    #[ORM\Column(type: "string", length: 255, nullable: true)]
    private $paysOrganismeDesigne;

    #[ORM\Column(type: "string", length: 255, nullable: true)]
    private $moyenContactDpoEmail;

    #[ORM\Column(type: "string", length: 255, nullable: true)]
    private $moyenContactDpoUrl;

    #[ORM\Column(type: "string", length: 20, nullable: true)]
    private $moyenContactDpoTelephone;

    #[ORM\Column(type: "string", length: 255, nullable: true)]
    private $moyenContactDpoAdressePostale;

    #[ORM\Column(type: "string", length: 10, nullable: true)]
    private $moyenContactDpoCodePostal;

    #[ORM\Column(type: "string", length: 255, nullable: true)]
    private $moyenContactDpoVille;

    #[ORM\Column(type: "string", length: 255, nullable: true)]
    private $moyenContactDpoPays;

    #[ORM\Column(type: "string", length: 255, nullable: true)]
    private $moyenContactDpoAutre;
    

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSirenOrganismeDesignant(): ?string
    {
        return $this->sirenOrganismeDesignant;
    }

    public function setSirenOrganismeDesignant(?string $sirenOrganismeDesignant): self
    {
        $this->sirenOrganismeDesignant = $sirenOrganismeDesignant;

        return $this;
    }

    public function getNomOrganismeDesignant(): ?string
    {
        return $this->nomOrganismeDesignant;
    }

    public function setNomOrganismeDesignant(?string $nomOrganismeDesignant): self
    {
        $this->nomOrganismeDesignant = $nomOrganismeDesignant;

        return $this;
    }

    public function getSecteurActiviteOrganismeDesignant(): ?string
    {
        return $this->secteurActiviteOrganismeDesignant;
    }

    public function setSecteurActiviteOrganismeDesignant(?string $secteurActiviteOrganismeDesignant): self
    {
        $this->secteurActiviteOrganismeDesignant = $secteurActiviteOrganismeDesignant;

        return $this;
    }

    public function getCodeNafOrganismeDesignant(): ?string
    {
        return $this->codeNafOrganismeDesignant;
    }

    public function setCodeNafOrganismeDesignant(?string $codeNafOrganismeDesignant): self
    {
        $this->codeNafOrganismeDesignant = $codeNafOrganismeDesignant;

        return $this;
    }

   
    public function getMoyenContactDpoEmail(): ?string
    {
        return $this->moyenContactDpoEmail;
    }

    public function setMoyenContactDpoEmail(?string $moyenContactDpoEmail): self
    {
        $this->moyenContactDpoEmail = $moyenContactDpoEmail;

        return $this;
    }

  
    public function getMoyenContactDpoUrl(): ?string
    {
        return $this->moyenContactDpoUrl;
    }

    public function setMoyenContactDpoUrl(?string $moyenContactDpoUrl): self
    {
        $this->moyenContactDpoUrl = $moyenContactDpoUrl;

        return $this;
    }

    
    public function getMoyenContactDpoTelephone(): ?string
    {
        return $this->moyenContactDpoTelephone;
    }

    public function setMoyenContactDpoTelephone(?string $moyenContactDpoTelephone): self
    {
        $this->moyenContactDpoTelephone = $moyenContactDpoTelephone;

        return $this;
    }

    public function getAdressePostaleOrganismeDesignant(): ?string
    {
        return $this->adressePostaleOrganismeDesignant;
    }

    public function setAdressePostaleOrganismeDesignant(?string $adressePostaleOrganismeDesignant): self
    {
        $this->adressePostaleOrganismeDesignant = $adressePostaleOrganismeDesignant;

        return $this;
    }

    public function getCodePostalOrganismeDesignant(): ?string
    {
        return $this->codePostalOrganismeDesignant;
    }

    public function setCodePostalOrganismeDesignant(?string $codePostalOrganismeDesignant): self
    {
        $this->codePostalOrganismeDesignant = $codePostalOrganismeDesignant;

        return $this;
    }

    public function getVilleOrganismeDesignant(): ?string
    {
        return $this->villeOrganismeDesignant;
    }

    public function setVilleOrganismeDesignant(?string $villeOrganismeDesignant): self
    {
        $this->villeOrganismeDesignant = $villeOrganismeDesignant;

        return $this;
    }

    public function getPaysOrganismeDesignant(): ?string
    {
        return $this->paysOrganismeDesignant;
    }

    public function setPaysOrganismeDesignant(?string $paysOrganismeDesignant): self
    {
        $this->paysOrganismeDesignant = $paysOrganismeDesignant;

        return $this;
    }

    public function getTypeDpo(): ?string
    {
        return $this->typeDpo;
    }

    public function setTypeDpo(?string $typeDpo): self
    {
        $this->typeDpo = $typeDpo;

        return $this;
    }

    public function getDateDesignation(): ?\DateTimeInterface
    {
        return $this->dateDesignation;
    }

    public function setDateDesignation(?\DateTimeInterface $dateDesignation): self
    {
        $this->dateDesignation = $dateDesignation;

        return $this;
    }

    public function getSirenOrganismeDesigne(): ?string
    {
        return $this->sirenOrganismeDesigne;
    }

    public function setSirenOrganismeDesigne(?string $sirenOrganismeDesigne): self
    {
        $this->sirenOrganismeDesigne = $sirenOrganismeDesigne;

        return $this;
    }

    public function getNomOrganismeDesigne(): ?string
    {
        return $this->nomOrganismeDesigne;
    }

    public function setNomOrganismeDesigne(?string $nomOrganismeDesigne): self
    {
        $this->nomOrganismeDesigne = $nomOrganismeDesigne;

        return $this;
    }

    public function getSecteurActiviteOrganismeDesigne()
    {
        return $this->secteurActiviteOrganismeDesigne;
    }

    public function setSecteurActiviteOrganismeDesigne(?string $secteurActiviteOrganismeDesigne): self
    {
        $this->secteurActiviteOrganismeDesigne = $secteurActiviteOrganismeDesigne;

        return $this;
    }

    public function getCodeNafOrganismeDesigne(): ?string
    {
        return $this->codeNafOrganismeDesigne;
    }

    public function setCodeNafOrganismeDesigne(?string $codeNafOrganismeDesigne): self
    {
        $this->codeNafOrganismeDesigne = $codeNafOrganismeDesigne;

        return $this;
    }

    public function getAdressePostaleOrganismeDesigne(): ?string
    {
        return $this->adressePostaleOrganismeDesigne;
    }

    public function setAdressePostaleOrganismeDesigne(?string $adressePostaleOrganismeDesigne): self
    {
        $this->adressePostaleOrganismeDesigne = $adressePostaleOrganismeDesigne;

        return $this;
    }

    public function getCodePostalOrganismeDesigne(): ?string
    {
        return $this->codePostalOrganismeDesigne;
    }

    public function setCodePostalOrganismeDesigne(?string $codePostalOrganismeDesigne): self
    {
        $this->codePostalOrganismeDesigne = $codePostalOrganismeDesigne;

        return $this;
    }

    public function getVilleOrganismeDesigne(): ?string
    {
        return $this->villeOrganismeDesigne;
    }

    public function setVilleOrganismeDesigne(?string $villeOrganismeDesigne): self
    {
        $this->villeOrganismeDesigne = $villeOrganismeDesigne;

        return $this;
    }

    public function getPaysOrganismeDesigne(): ?string
    {
        return $this->paysOrganismeDesigne;
    }

    public function setPaysOrganismeDesigne(?string $paysOrganismeDesigne): self
    {
        $this->paysOrganismeDesigne = $paysOrganismeDesigne;

        return $this;
    }

    public function getMoyenContactDpoAdressePostale(): ?string
    {
        return $this->moyenContactDpoAdressePostale;
    }

    public function setMoyenContactDpoAdressePostale(?string $moyenContactDpoAdressePostale): self
    {
        $this->moyenContactDpoAdressePostale = $moyenContactDpoAdressePostale;

        return $this;
    }

    public function getMoyenContactDpoCodePostal(): ?string
    {
        return $this->moyenContactDpoCodePostal;
    }

    public function setMoyenContactDpoCodePostal(?string $moyenContactDpoCodePostale): self
    {
        $this->moyenContactDpoCodePostal = $moyenContactDpoCodePostale;

        return $this;
    }

    public function getMoyenContactDpoVille(): ?string
    {
        return $this->moyenContactDpoVille;
    }

    public function setMoyenContactDpoVille(?string $moyenContactDpoVille): self
    {
        $this->moyenContactDpoVille = $moyenContactDpoVille;

        return $this;
    }

    public function getMoyenContactDpoPays(): ?string
    {
        return $this->moyenContactDpoPays;
    }

    public function setMoyenContactDpoPays(?string $moyenContactDpoPays): self
    {
        $this->moyenContactDpoPays = $moyenContactDpoPays;

        return $this;
    }

    public function getMoyenContactDpoAutre(): ?string
    {
        return $this->moyenContactDpoAutre;
    }

    public function setMoyenContactDpoAutre(?string $moyenContactDpoAutre): self
    {
        $this->moyenContactDpoAutre = $moyenContactDpoAutre;

        return $this;
    }




}
