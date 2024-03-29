<?php
namespace UserGroup\Model;

use Marmot\Core;
use Marmot\Common\Model\Object;
use Marmot\Common\Model\IObject;

class UserGroup implements IObject
{
    use Object;

    const STATUS_NORMAL = 0;

    private $id;

    private $name;

    public function __construct(int $id = 0)
    {
        $this->id = !empty($id) ? $id : 0;
        $this->name = '';
        $this->status = self::STATUS_NORMAL;
        $this->updateTime = Core::$container->get('time');
        $this->createTime = Core::$container->get('time');
        $this->statusTime = 0;
    }

    public function __destruct()
    {
        unset($this->id);
        unset($this->name);
        unset($this->status);
        unset($this->updateTime);
        unset($this->createTime);
        unset($this->statusTime);
    }

    public function setId($id) : void
    {
        $this->id = intval($id);
    }

    public function getId() : int
    {
        return $this->id;
    }

    public function setName(string $name) : void
    {
        $this->name = $name;
    }

    public function getName() : string
    {
        return $this->name;
    }

    public function setStatus(int $status) : void
    {
        $this->status= $status;
    }
}
