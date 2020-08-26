<?php

namespace Myrzan\TecDocClient\Generated;

/**
 * Class representing CsgDocumentDataByArticleId2RecordType
 *
 * 
 * XSD Type: csgDocumentDataByArticleId2Record
 */
class CsgDocumentDataByArticleId2RecordType extends CsgDocumentDataByArticleId2RecordSrcType
{

    /**
     * @var \Myrzan\TecDocClient\Generated\ArticleDocumentsByDocIdRecordType $articleDoc
     */
    private $articleDoc = null;

    /**
     * @var \Myrzan\TecDocClient\Generated\CoordinatesByArticleDocumentRecordType[] $coSeq
     */
    private $coSeq = null;

    /**
     * Gets as articleDoc
     *
     * @return \Myrzan\TecDocClient\Generated\ArticleDocumentsByDocIdRecordType
     */
    public function getArticleDoc()
    {
        return $this->articleDoc;
    }

    /**
     * Sets a new articleDoc
     *
     * @param \Myrzan\TecDocClient\Generated\ArticleDocumentsByDocIdRecordType $articleDoc
     * @return self
     */
    public function setArticleDoc(\Myrzan\TecDocClient\Generated\ArticleDocumentsByDocIdRecordType $articleDoc)
    {
        $this->articleDoc = $articleDoc;
        return $this;
    }

    /**
     * Adds as array
     *
     * @return self
     * @param \Myrzan\TecDocClient\Generated\CoordinatesByArticleDocumentRecordType $array
     */
    public function addToCoSeq(\Myrzan\TecDocClient\Generated\CoordinatesByArticleDocumentRecordType $array)
    {
        $this->coSeq[] = $array;
        return $this;
    }

    /**
     * isset coSeq
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCoSeq($index)
    {
        return isset($this->coSeq[$index]);
    }

    /**
     * unset coSeq
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCoSeq($index)
    {
        unset($this->coSeq[$index]);
    }

    /**
     * Gets as coSeq
     *
     * @return \Myrzan\TecDocClient\Generated\CoordinatesByArticleDocumentRecordType[]
     */
    public function getCoSeq()
    {
        return $this->coSeq;
    }

    /**
     * Sets a new coSeq
     *
     * @param \Myrzan\TecDocClient\Generated\CoordinatesByArticleDocumentRecordType[] $coSeq
     * @return self
     */
    public function setCoSeq(array $coSeq)
    {
        $this->coSeq = $coSeq;
        return $this;
    }


}

