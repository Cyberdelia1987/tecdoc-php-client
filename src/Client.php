<?php

namespace Myrzan\TecDocClient;

use GuzzleHttp\Client as GuzzleClient;
use JsonMapper;
use Myrzan\TecDocClient\Generated\Request\AddDynamicAddress;
use Myrzan\TecDocClient\Generated\Request\AddDynamicAPIKey;
use Myrzan\TecDocClient\Generated\Request\ArticleLinkedAllLinkingTarget3;
use Myrzan\TecDocClient\Generated\Request\ArticleLinkedAllLinkingTarget4;
use Myrzan\TecDocClient\Generated\Request\ArticleLinkedAllLinkingTargetManufacturer;
use Myrzan\TecDocClient\Generated\Request\ArticleLinkedAllLinkingTargetManufacturer2;
use Myrzan\TecDocClient\Generated\Request\AutoCompleteSuggestions;
use Myrzan\TecDocClient\Generated\Request\ChildNodesPattern;
use Myrzan\TecDocClient\Generated\Request\ChildNodesPattern2;
use Myrzan\TecDocClient\Generated\Request\Countries;
use Myrzan\TecDocClient\Generated\Request\CountryGroups;
use Myrzan\TecDocClient\Generated\Request\CriteriaDialogAttributs;
use Myrzan\TecDocClient\Generated\Request\GetArticleLinkedAllLinkingTargetsByIds3;
use Myrzan\TecDocClient\Generated\Request\GetArticles;
use Myrzan\TecDocClient\Generated\Request\GetBrands;
use Myrzan\TecDocClient\Generated\Request\GetLanguages;
use Myrzan\TecDocClient\Generated\Request\GetLinkageTargets;
use Myrzan\TecDocClient\Generated\Request\GetOEArticlesByVIN;
use Myrzan\TecDocClient\Generated\Request\GetPartsByVINExt;
use Myrzan\TecDocClient\Generated\Request\GetShortCuts2;
use Myrzan\TecDocClient\Generated\Request\GetVehicleDataByVINExt;
use Myrzan\TecDocClient\Generated\Request\GetVehiclesByKeyNumberPlates;
use Myrzan\TecDocClient\Generated\Request\GetVehiclesByVIN;
use Myrzan\TecDocClient\Generated\Request\GetVendorIds2;
use Myrzan\TecDocClient\Generated\Request\GetVersionRequest;
use Myrzan\TecDocClient\Generated\Request\KeyValues;
use Myrzan\TecDocClient\Generated\Response\ArticleLinkedAllLinkingTarget3Response;
use Myrzan\TecDocClient\Generated\Response\ArticleLinkedAllLinkingTarget4Response;
use Myrzan\TecDocClient\Generated\Response\ArticleLinkedAllLinkingTargetManufacturer2Response;
use Myrzan\TecDocClient\Generated\Response\ArticleLinkedAllLinkingTargetManufacturerResponse;
use Myrzan\TecDocClient\Generated\Response\ArticleLinkedAllLinkingTargetsByIds3Response;
use Myrzan\TecDocClient\Generated\Response\ArticlesResponse;
use Myrzan\TecDocClient\Generated\Response\AutoCompleteSuggestionsResponse;
use Myrzan\TecDocClient\Generated\Response\BrandsResponse;
use Myrzan\TecDocClient\Generated\Response\ChildNodesPattern2Response;
use Myrzan\TecDocClient\Generated\Response\ChildNodesPatternResponse;
use Myrzan\TecDocClient\Generated\Response\CountriesResponse;
use Myrzan\TecDocClient\Generated\Response\CountryGroupsResponse;
use Myrzan\TecDocClient\Generated\Response\CriteriaDialogAttributsResponse;
use Myrzan\TecDocClient\Generated\Response\DynamicAddressResponse;
use Myrzan\TecDocClient\Generated\Response\DynamicAPIKeyResponse;
use Myrzan\TecDocClient\Generated\Response\KeyValuesResponse;
use Myrzan\TecDocClient\Generated\Response\LanguagesResponse;
use Myrzan\TecDocClient\Generated\Response\LinkageTargets;
use Myrzan\TecDocClient\Generated\Response\OEArticlesByVINResponse;
use Myrzan\TecDocClient\Generated\Response\PartsByVINExt;
use Myrzan\TecDocClient\Generated\Response\ShortCuts2Response;
use Myrzan\TecDocClient\Generated\Response\VehicleDataByVINExt;
use Myrzan\TecDocClient\Generated\Response\VehiclesByKeyNumberPlatesResponse;
use Myrzan\TecDocClient\Generated\Response\VehiclesByVINResponse;
use Myrzan\TecDocClient\Generated\Response\VendorIds2Response;
use Myrzan\TecDocClient\Generated\Response\VersionResponse;
use ReflectionClass;
use ReflectionObject;
use RuntimeException;
use stdClass;

/**
 * TecDoc API Client.
 */
class Client
{
    const TECDOC_JSON_ENDPOINT =
        "https://webservice.tecalliance.services/pegasus-3-0/services/TecdocToCatDLB.jsonEndpoint?api_key=";

    private $client;
    private $url;
    private $providerId;
    private $jsonMapper;
    private $apiKey;

    /**
     * Class constructor.
     *
     * @param string $apiKey
     * @param int $providerId
     */
    public function __construct(string $apiKey, int $providerId)
    {
        $this->providerId = $providerId;
        $this->client = new GuzzleClient();
        $this->url = self::TECDOC_JSON_ENDPOINT . $apiKey;
        $this->jsonMapper = new JsonMapper();
        $this->apiKey = $apiKey;
    }

    /**
     * @param AddDynamicAddress $req
     * @return DynamicAddressResponse
     */
    public function addDynamicAddress(AddDynamicAddress $req): DynamicAddressResponse
    {
        $json = $this->call('addDynamicAddress', $req);
        return $this->mapJsonToObject($json, new DynamicAddressResponse());
    }

    /**
     * @param AddDynamicAPIKey $req
     * @return DynamicAPIKeyResponse
     */
    public function addDynamicAPIKey(AddDynamicAPIKey $req): DynamicAPIKeyResponse
    {
        $json = $this->call('addDynamicAPIKey', $req);
        return $this->mapJsonToObject($json, new DynamicAPIKeyResponse());
    }

    public function getArticleLinkedAllLinkingTarget3(ArticleLinkedAllLinkingTarget3 $req): ArticleLinkedAllLinkingTarget3Response
    {
        $json = $this->call('getArticleLinkedAllLinkingTarget3', $req);
        return $this->mapJsonToObject($json, new ArticleLinkedAllLinkingTarget3Response());
    }

    public function getArticleLinkedAllLinkingTarget4(ArticleLinkedAllLinkingTarget4 $req): ArticleLinkedAllLinkingTarget4Response
    {
        $json = $this->call('getArticleLinkedAllLinkingTarget4', $req);
        // Handle empty API result with invalid property value
        if (sizeof($json->data) == 1 and is_string($json->data[0]->articleLinkages)) {
            $json->data = [];
        }
        return $this->mapJsonToObject($json, new ArticleLinkedAllLinkingTarget4Response());
    }

    public function getArticleLinkedAllLinkingTargetManufacturer(ArticleLinkedAllLinkingTargetManufacturer $req): ArticleLinkedAllLinkingTargetManufacturerResponse
    {
        $json = $this->call('getArticleLinkedAllLinkingTargetManufacturer', $req);
        return $this->mapJsonToObject($json, new ArticleLinkedAllLinkingTargetManufacturerResponse());
    }

    public function getArticleLinkedAllLinkingTargetManufacturer2(ArticleLinkedAllLinkingTargetManufacturer2 $req): ArticleLinkedAllLinkingTargetManufacturer2Response
    {
        $json = $this->call('getArticleLinkedAllLinkingTargetManufacturer2', $req);
        return $this->mapJsonToObject($json, new ArticleLinkedAllLinkingTargetManufacturer2Response());
    }

    public function getArticleLinkedAllLinkingTargetsByIds3(GetArticleLinkedAllLinkingTargetsByIds3 $paramsObject): ArticleLinkedAllLinkingTargetsByIds3Response
    {
        Client::addIntermediatePropNamedArray($paramsObject, 'linkedArticlePairs');
        $json = $this->call('getArticleLinkedAllLinkingTargetsByIds3', $paramsObject);
        return $this->mapJsonToObject($json, new ArticleLinkedAllLinkingTargetsByIds3Response());
    }

    /**
     * @param GetArticles $req
     * @return ArticlesResponse
     * @replaces
     *  - getArticleAccessoryList4
     *  - getArticleDirectSearchAllNumbersWithState
     *  - getArticleIdsWithState
     *  - getArticlePartList
     *  - getAssignedArticlesByIds4
     *  - getAssignedArticlesByIds6
     *  - getAssignedArticlesByIds7
     *  - getChildNodesAllLinkingTarget2
     *  - getCriteria2
     *  - getDirectArticlesByIds4
     *  - getDirectArticlesByIds6
     *  - getDirectArticlesByIds7
     *  - getGenericArticles
     *  - getGenericArticlesByManufacturer6
     *  - getGenericArticlesByManufacturer7
     *  - getLinkedArticles
     *  - getLinkedBrands
     */
    public function getArticles(GetArticles $req): ArticlesResponse
    {
        $json = $this->call('getArticles', $req);
        return $this->mapJsonToObject($json, new ArticlesResponse());
    }

    public function getAutoCompleteSuggestions(AutoCompleteSuggestions $req): AutoCompleteSuggestionsResponse
    {
        $json = $this->call('getAutoCompleteSuggestions', $req);
        return $this->mapJsonToObject($json, new AutoCompleteSuggestionsResponse());
    }

    /**
     * @param GetBrands $req
     * @return BrandsResponse
     * @replaces
     *  - getAmBrandAddress
     *  - getAmBrands
     */
    public function getBrands(GetBrands $req): BrandsResponse
    {
        $json = $this->call('getBrands', $req);
        return $this->mapJsonToObject($json, new BrandsResponse());
    }

    public function getChildNodesPattern(ChildNodesPattern $req): ChildNodesPatternResponse
    {
        $json = $this->call('getChildNodesPattern', $req);
        return $this->mapJsonToObject($json, new ChildNodesPatternResponse());
    }

    public function getChildNodesPattern2(ChildNodesPattern2 $req): ChildNodesPattern2Response
    {
        $json = $this->call('getChildNodesPattern2', $req);
        return $this->mapJsonToObject($json, new ChildNodesPattern2Response());
    }

    public function getCountries(Countries $req): CountriesResponse
    {
        $json = $this->call('getCountries', $req);
        return $this->mapJsonToObject($json, new CountriesResponse());
    }

    public function getCountryGroups(CountryGroups $req): CountryGroupsResponse
    {
        $json = $this->call('getCountryGroups', $req);
        return $this->mapJsonToObject($json, new CountryGroupsResponse());
    }

    public function getCriteriaDialogAttributs(CriteriaDialogAttributs $req): CriteriaDialogAttributsResponse
    {
        $json = $this->call('getCriteriaDialogAttributs', $req);
        return $this->mapJsonToObject($json, new CriteriaDialogAttributsResponse());
    }

    public function getKeyValues(KeyValues $req): KeyValuesResponse
    {
        $json = $this->call('getKeyValues', $req);
        return $this->mapJsonToObject($json, new KeyValuesResponse());
    }

    public function getLanguages(GetLanguages $paramsObject): LanguagesResponse
    {
        $json = $this->call('getLanguages', $paramsObject);
        return $this->mapJsonToObject($json, new LanguagesResponse());
    }

    public function getLinkageTargets(GetLinkageTargets $req): LinkageTargets
    {
        $json = $this->call('getLinkageTargets', $req);
        return $this->mapJsonToObject($json, new LinkageTargets());
    }

    public function getOEArticlesByVIN(GetOEArticlesByVIN $req): OEArticlesByVINResponse
    {
        $json = $this->call('getOEArticlesByVIN', $req);
        return $this->mapJsonToObject($json, new OEArticlesByVINResponse());
    }

    public function getPartsByVINExt(GetPartsByVINExt $req): PartsByVINExt
    {
        $json = $this->call('getPartsByVINExt', $req);
        return $this->mapJsonToObject($json, new PartsByVINExt());
    }

    public function getShortCuts2(GetShortCuts2 $req): ShortCuts2Response
    {
        $json = $this->call('getShortCuts2', $req);
        return $this->mapJsonToObject($json, new ShortCuts2Response());
    }

    public function getVehicleDataByVINExt(GetVehicleDataByVINExt $req): VehicleDataByVINExt
    {
        $json = $this->call('getVehicleDataByVINExt', $req);
        return $this->mapJsonToObject($json, new VehicleDataByVINExt());
    }

    public function getVehiclesByKeyNumberPlates(GetVehiclesByKeyNumberPlates $req): VehiclesByKeyNumberPlatesResponse
    {
        $json = $this->call('getVehiclesByKeyNumberPlates', $req);
        return $this->mapJsonToObject($json, new VehiclesByKeyNumberPlatesResponse());
    }

    public function getVehiclesByVIN(GetVehiclesByVIN $req): VehiclesByVINResponse
    {
        $json = $this->call('getVehiclesByVIN', $req);
        return $this->mapJsonToObject($json, new VehiclesByVINResponse());
    }

    public function getVendorIds2(GetVendorIds2 $req): VendorIds2Response
    {
        $json = $this->call('getVendorIds2', $req);
        return $this->mapJsonToObject($json, new VendorIds2Response());
    }

    public function getVersion(GetVersionRequest $req): VersionResponse
    {
        $json = $this->call('getVersion', $req);
        return $this->mapJsonToObject($json, new VersionResponse());
    }

    private function call(string $functionName, $paramsObject)
    {
        $paramsArray = self::recursivelyTransformObjectToArray($paramsObject);
        $paramsArray['provider'] = $this->providerId;
        $jsonBody = [
            $functionName => $paramsArray
        ];
        $response = $this->client->request('POST', $this->url, [
            'verify' => false,
            'json' => $jsonBody
        ]);

        if ($response->getStatusCode() == 200) {
            $json = json_decode($response->getBody());
            Client::recursivelyRemoveIntermediatePropsNamedArray($json);

            return $json;
        }

        throw new RuntimeException("HTTP request failed with code {$response->getStatusCode()}");
    }

    private static function recursivelyRemoveIntermediatePropsNamedArray($obj, $parentObj = null, $propName = null): void
    {
        foreach ($obj as $prop => $val) {
            if ($prop === 'array' && $parentObj != null && $propName != null) {
                $parentObj->$propName = $val;

                unset($obj->array);
            }

            if (is_object($val) or is_array($val)) {
                Client::recursivelyRemoveIntermediatePropsNamedArray($val, $obj, $prop);
            }
        }
    }

    /**
     * @throws \ReflectionException
     */
    private static function addIntermediatePropNamedArray(object $paramsObject, string $propName): void
    {
        $reflectionClass = new ReflectionClass($paramsObject);
        $reflectionProperty = $reflectionClass->getParentClass()->getProperty($propName);

        $reflectionProperty->setAccessible(true);

        $propValue = new stdClass();
        $propValue->array = $reflectionProperty->getValue($paramsObject);

        $reflectionProperty->setValue($paramsObject, $propValue);
    }

    private static function recursivelyTransformObjectToArray($object)
    {
        if (is_array($object)) {
            $result = [];
            foreach ($object as $k => $v) {
                $transformedVal = self::recursivelyTransformObjectToArray($v);
                if ($transformedVal !== null) {
                    $result[$k] = $transformedVal;
                }
            }

            return $result;
        } else if (is_object($object)) {
            $result = [];

            try {
                $reflection = $object instanceof stdClass ? new ReflectionObject($object) : new ReflectionClass($object);
                do {
                    $properties = $reflection->getProperties();

                    foreach ($properties as $property) {
                        $property->setAccessible(true);

                        $propName = $property->getName();
                        $propVal = $property->isInitialized($object) ? $property->getValue($object) : $property->getDefaultValue();
                        $transformedVal = self::recursivelyTransformObjectToArray($propVal);
                        if ($transformedVal !== null) {
                            $result[$propName] = $transformedVal;
                        }
                    }
                } while ($reflection = $reflection->getParentClass());
            } catch (\ReflectionException $e) {
                print_r($e);
            }

            return $result;
        }

        return $object;
    }

    private function mapJsonToObject($json, $object)
    {
        try {
            return $this->jsonMapper->map($json, $object);
        } catch (\JsonMapper_Exception $e) {

            // Replace empty string with empty array and try again
            if (preg_match('/JSON property "(.+)" must be an array, string given/', $e->getMessage(), $matches)) {
                $propName = $matches[1];
                $this->findNestedPropAndSetValue($json, $propName, '', []);

                return $this->mapJsonToObject($json, $object);
            }

            throw $e;
        }
    }

    private function findNestedPropAndSetValue($obj, string $propName, $propValue, $newValue): void
    {
        if (!is_object($obj)) {
            return;
        }

        foreach ($obj as $p => $v) {
            if ($p === $propName and $v === $propValue) {
                $obj->$p = $newValue;
            }

            if (is_object($v)) {
                $this->findNestedPropAndSetValue($v, $propName, $propValue, $newValue);
            }

            if (is_array($v)) {
                foreach ($v as $k => $v1) {
                    $this->findNestedPropAndSetValue($v1, $propName, $propValue, $newValue);
                }
            }
        }
    }
}