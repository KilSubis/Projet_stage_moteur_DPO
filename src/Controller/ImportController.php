<?php

namespace App\Controller;

use App\Entity\DataDPO;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;



class ImportController extends AbstractController
{

    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }


    #[Route('/templates/import', name: 'import')]
    public function index(): Response
    {
        return $this->render('index.html.twig');
    }

    #[Route('/import', name: 'import')]
    public function import(Request $request)
    {
        // URL du fichier CSV distant
        $csvUrl = 'https://www.data.gouv.fr/fr/datasets/r/c5d02b42-1008-4406-83f5-3a81c8b936a3';

        
        $tempCsvFile = tempnam(sys_get_temp_dir(), 'csv_');
        file_put_contents($tempCsvFile, file_get_contents($csvUrl));

        
        if (!file_exists($tempCsvFile)) {
            throw new \Exception('Échec du téléchargement du fichier CSV.');
        }

        
        $csvData = $this->parseCsv($tempCsvFile);
        foreach ($csvData as $rowData) {
            
            $dpoEntity = new DataDPO();

            
            $dpoEntity->setSirenOrganismeDesignant($rowData['SIREN organisme désignant']);
            $dpoEntity->setNomOrganismeDesignant($rowData['Nom organisme désignant']);
            $dpoEntity->setSecteurActiviteOrganismeDesignant($rowData['Secteur activité organisme désignant']);
            $dpoEntity->setCodeNafOrganismeDesignant($rowData['Code NAF organisme désignant']);
            $dpoEntity->setAdressePostaleOrganismeDesignant($rowData['Adresse postale organisme désignant']);
            $dpoEntity->setCodePostalOrganismeDesignant($rowData['Code postal organisme désignant']);
            $dpoEntity->setVilleOrganismeDesignant($rowData['Ville organisme désignant']);
            $dpoEntity->setPaysOrganismeDesignant($rowData['Pays organisme désignant']);
            $dpoEntity->setTypeDpo($rowData['Type de DPO']);
            $dpoEntity->setDateDesignation(new \DateTime($rowData['Date de la désignation']));
            $dpoEntity->setSirenOrganismeDesigne($rowData['SIREN organisme désigné']);
            $dpoEntity->setNomOrganismeDesigne($rowData['Nom organisme désigné']);
            $dpoEntity->setSecteurActiviteOrganismeDesigne($rowData['Secteur activité organisme désigné']);
            $dpoEntity->setCodeNafOrganismeDesigne($rowData['Code NAF organisme désigné']);
            $dpoEntity->setAdressePostaleOrganismeDesigne($rowData['Adresse postale organisme désigné']);
            $dpoEntity->setCodePostalOrganismeDesigne($rowData['Code postal organisme désigné']);
            $dpoEntity->setVilleOrganismeDesigne($rowData['Ville organisme désigné']);
            $dpoEntity->setPaysOrganismeDesigne($rowData['Pays organisme désigné']);
            $dpoEntity->setMoyenContactDpoEmail($rowData['Moyen contact DPO email']);
            $dpoEntity->setMoyenContactDpoUrl($rowData['Moyen contact DPO url']);
            $dpoEntity->setMoyenContactDpoTelephone($rowData['Moyen contact DPO téléphone']);
            $dpoEntity->setMoyenContactDpoAdressePostale($rowData['Moyen contact DPO adresse postale']);
            $dpoEntity->setMoyenContactDpoCodePostal($rowData['Moyen contact DPO code postal']);
            $dpoEntity->setMoyenContactDpoVille($rowData['Moyen contact DPO ville']);
            $dpoEntity->setMoyenContactDpoPays($rowData['Moyen contact DPO pays']);
            $dpoEntity->setMoyenContactDpoAutre($rowData['Moyen contact DPO autre']);
            

            
            $this->entityManager->persist($dpoEntity);
        }

        
        $this->entityManager->flush();


        
        return new Response('Importation réussie!');
    }

    private function parseCsv($filePath)
    {
       
        $reader = \League\Csv\Reader::createFromPath($filePath, 'r');
        $reader->setHeaderOffset(0); 

        $csvData = [];
        foreach ($reader as $row) {
            $csvData[] = $row; 
        }

        return $csvData;
    }
}

