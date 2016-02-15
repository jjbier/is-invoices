<?php
/**
 * Created by PhpStorm.
 * User: xabier
 * Date: 15/02/16
 * Time: 23:52
 */

namespace ThemeBundle\Model;

use Avanzu\AdminThemeBundle\Model\MenuItem as ThemeMenuItem;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

/**
 * Class MenuItemModel
 * @package ThemeBundle\Model
 */
class MenuItemModel extends ThemeMenuItem
{
    /**
     * @var integer
     */
    protected $identifier;

    /**
     * @var string
     */
    protected $label;

    /**
     * @var string
     */
    protected $route;

    /**
     * @var boolean
     */
    protected $isActive;

    /**
     * @var Collection|MenuItemInterface[]
     */
    protected $children;

    /**
     * @var
     */
    protected $icon;

    /**
     * @var string
     */
    protected $badge;

    /**
     * @var MenuItemInterface
     */
    protected $parent;

    /**
     * MenuItemModel constructor.
     */
    public function __construct()
    {
        $this->children = new ArrayCollection();
    }


    /**
     * @return integer
     */
    public function getIdentifier()
    {
        $this->identifier;
    }

    /**
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @return string
     */
    public function getRoute()
    {
        return $this->route;
    }

    /**
     * @return boolean
     */
    public function isActive()
    {
        return $this->isActive;
    }

    /**
     * @param boolean $isActive
     *
     * @return MenuItemInterface
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * @return boolean
     */
    public function hasChildren()
    {
        return count($this->children) > 0;
    }

    /**
     * @return MenuItemInterface[]
     */
    public function getChildren()
    {
        return $this->children;
    }

    /**
     * @param MenuItemInterface $child
     *
     * @return MenuItemInterface
     */
    public function addChild(MenuItemInterface $child)
    {
        $this->children[] = $child;

        return $this;
    }

    /**
     * @param MenuItemInterface $child
     *
     * @return MenuItemInterface
     */
    public function removeChild(MenuItemInterface $child)
    {
        // TODO: Implement removeChild() method.
    }

    /**
     * @return mixed
     */
    public function getIcon()
    {
        // TODO: Implement getIcon() method.
    }

    /**
     * @return mixed
     */
    public function getBadge()
    {
        // TODO: Implement getBadge() method.
    }

    /**
     * @return mixed
     */
    public function getBadgeColor()
    {
        // TODO: Implement getBadgeColor() method.
    }

    /**
     * @return mixed
     */
    public function getParent()
    {
        // TODO: Implement getParent() method.
    }

    /**
     * @return mixed
     */
    public function hasParent()
    {
        // TODO: Implement hasParent() method.
    }

    /**
     * @param MenuItemInterface $parent
     *
     * @return mixed
     */
    public function setParent(MenuItemInterface $parent = null)
    {
        // TODO: Implement setParent() method.
    }

    /**
     * @return MenuItemInterface|null
     */
    public function getActiveChild()
    {
        // TODO: Implement getActiveChild() method.
    }
}