<?php namespace Arcanedev\SeoHelper\Entities\Twitter;

use Arcanedev\SeoHelper\Bases\MetaCollection as BaseMetaCollection;

/**
 * Class     MetaCollection
 *
 * @package  Arcanedev\SeoHelper\Entities\Twitter
 * @author   ARCANEDEV <arcanedev.maroc@gmail.com>
 */
class MetaCollection extends BaseMetaCollection
{
    /* ------------------------------------------------------------------------------------------------
     |  Properties
     | ------------------------------------------------------------------------------------------------
     */
    /**
     * Meta tag prefix.
     *
     * @var string
     */
    protected $prefix = 'twitter:';

    /* ------------------------------------------------------------------------------------------------
     |  Main Functions
     | ------------------------------------------------------------------------------------------------
     */
    /**
     * Add a meta to collection.
     *
     * @param  string  $name
     * @param  string  $content
     *
     * @return self
     */
    public function add($name, $content)
    {
        parent::add($name, $content);
    }
}
