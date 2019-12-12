<?php
declare(strict_types=1);

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Ramsey\Uuid\UuidInterface;

/**
 * @ORM\Entity()
 */
class Product
    implements \JsonSerializable{
    /**
     * @var UuidInterface
     *
     * @ORM\Id
     * @ORM\Column(type="uuid", unique=true)
     * @ORM\GeneratedValue(strategy="CUSTOM")
     * @ORM\CustomIdGenerator(class="Ramsey\Uuid\Doctrine\UuidGenerator")
     */
    protected $uuid;

    /**
     * @var string
     *
     * @ORM\Column(type="string", unique=true)
     */
    private $sku;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    private $vendor;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    private $color;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    private $imageUrl;

    /**
     * @var string
     *
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @var bool
     *
     * @ORM\Column(type="boolean")
     */
    private $isOutOfStock;

    /**
     * @return UuidInterface
     */
    public function getUuid(): UuidInterface {
        return $this->uuid;
    }

    /**
     * @return string
     * @var string
     */
    public function getSku(): string {
        return $this->sku;
    }

    /**
     * @return string
     * @var string
     */
    public function getName(): string {
        return $this->name;
    }

    /**
     * @return string
     * @var string
     */
    public function getVendor(): string {
        return $this->vendor;
    }

    /**
     * @return string
     * @var string
     */
    public function getColor(): string
    {
        return $this->color;
    }


    /**
     * @return string
     * @var string
     */
    public function getImageUrl(): string {
        return $this->imageUrl;
    }

    /**
     * @return bool
     * @var bool
     */
    public function isOutOfStock(): bool {
        return $this->isOutOfStock;
    }

    public static function fromTestingFixtures(
        string $sku,
        string $name,
        string $color,
        bool $isOutOfStock,
        string $vendor,
        string $imageUrl,
        string $description
    ): Product {
        if ('dev' !== getenv('APP_ENV')) {
            throw new \BadFunctionCallException('Allowed only in development');
        }

        $instance = new self();
        $instance->sku = $sku;
        $instance->name = $name;
        $instance->vendor = $vendor;
        $instance->color = $color;
        $instance->imageUrl = $imageUrl;
        $instance->description = $description;
        $instance->isOutOfStock = $isOutOfStock;

        return $instance;
    }

    public function jsonSerialize(): array {
        return get_object_vars($this);
    }
}
