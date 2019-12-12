<?php
declare(strict_types=1);

namespace App\Controller;

use App\Repository\ProductRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\SerializerInterface;

final class Product {

    /** @var SerializerInterface */
    private $serializer;

    /** @var ProductRepository */
    private $repository;

    public function __construct(SerializerInterface $serializer, ProductRepository $repository)
    {
        $this->serializer = $serializer;
        $this->repository = $repository;
    }

    /**
     * @Route("/api/product", name="product_list")
     */
    public function listProductsAction(): JsonResponse
    {
        $products = $this->repository->findAll();

        return new JsonResponse(
            $products,
            JsonResponse::HTTP_OK,
            ['Content-Type' => 'application/json'],
            false
        );
    }
}
