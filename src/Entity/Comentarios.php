<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\ComentariosRepository;
use Doctrine\ORM\Mapping as ORM;
#[ApiResource]

#[ORM\Entity(repositoryClass: ComentariosRepository::class)]
class Comentarios
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $comentario = null;

    #[ORM\ManyToOne(inversedBy: 'comentarios')]
    private ?Socios $usuario = null;

    #[ORM\ManyToOne(inversedBy: 'comentarios')]
    private ?Eventos $eventos = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getComentario(): ?string
    {
        return $this->comentario;
    }

    public function setComentario(string $comentario): static
    {
        $this->comentario = $comentario;

        return $this;
        
    }

    public function getUsuario(): ?Socios
    {
        return $this->usuario;
    }

    public function setUsuario(?Socios $usuario): static
    {
        $this->usuario = $usuario;

        return $this;
    }

    public function getEventos(): ?Eventos
    {
        return $this->eventos;
    }

    public function setEventos(?Eventos $eventos): static
    {
        $this->eventos = $eventos;

        return $this;
    }
}
