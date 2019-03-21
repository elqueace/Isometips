<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ParisRepository")
 */
class Paris
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text", length=500, nullable=true)
     */
    private $name;

    /**
     * @ORM\Column(type="text", length=500, nullable=true)
     */
    private $url;

    /**
     * @ORM\Column(type="text", length=500, nullable=true)
     */
    private $source;

    /**
     * @ORM\Column(type="text", length=500, nullable=true)
     */
    private $topics;

    /**
     * @ORM\Column(type="text", length=500, nullable=true)
     */
    private $date_first_seen;

    /**
     * @ORM\Column(type="text", length=500, nullable=true)
     */
    private $date_last_seen;

    /**
     * @ORM\Column(type="text", length=500, nullable=true)
     */
    private $show_interval;

    /**
     * @ORM\Column(type="text", length=500, nullable=true)
     */
    private $article_score;

    /**
     * @ORM\Column(type="text", length=500, nullable=true)
     */
    private $social_score;

    /**
     * @ORM\Column(type="text", length=500, nullable=true)
     */
    private $social_speed_sph;

    /**
     * @ORM\Column(type="text", length=500, nullable=true)
     */
    private $img_uri;

    /**
     * @ORM\Column(type="text", length=500, nullable=true)
     */
    private $sph_on_period;

    /**
     * @ORM\Column(type="text", length=500, nullable=true)
     */
    private $content_html;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $articleid;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(?string $url): self
    {
        $this->url = $url;

        return $this;
    }

    public function getSource(): ?string
    {
        return $this->source;
    }

    public function setSource(?string $source): self
    {
        $this->source = $source;

        return $this;
    }

    public function getTopics(): ?string
    {
        return $this->topics;
    }

    public function setTopics(?string $topics): self
    {
        $this->topics = $topics;

        return $this;
    }

    public function getDateFirstSeen(): ?string
    {
        return $this->date_first_seen;
    }

    public function setDateFirstSeen(string $date_first_seen): self
    {
        $this->date_first_seen = $date_first_seen;

        return $this;
    }

    public function getDateLastSeen(): ?string
    {
        return $this->date_last_seen;
    }

    public function setDateLastSeen(string $date_last_seen): self
    {
        $this->date_last_seen = $date_last_seen;

        return $this;
    }

    public function getShowInterval(): ?string
    {
        return $this->show_interval;
    }

    public function setShowInterval(string $show_interval): self
    {
        $this->show_interval = $show_interval;

        return $this;
    }

    public function getArticleScore(): ?string
    {
        return $this->article_score;
    }

    public function setArticleScore(string $article_score): self
    {
        $this->article_score = $article_score;

        return $this;
    }

    public function getSocialScore(): ?string
    {
        return $this->social_score;
    }

    public function setSocialScore(string $social_score): self
    {
        $this->social_score = $social_score;

        return $this;
    }

    public function getSocialSpeedSph(): ?string
    {
        return $this->social_speed_sph;
    }

    public function setSocialSpeedSph(string $social_speed_sph): self
    {
        $this->social_speed_sph = $social_speed_sph;

        return $this;
    }

    public function getImgUri(): ?string
    {
        return $this->img_uri;
    }

    public function setImgUri(string $img_uri): self
    {
        $this->img_uri = $img_uri;

        return $this;
    }

    public function getSphOnPeriod(): ?string
    {
        return $this->sph_on_period;
    }

    public function setSphOnPeriod(string $sph_on_period): self
    {
        $this->sph_on_period = $sph_on_period;

        return $this;
    }

    public function getContentHtml(): ?string
    {
        return $this->content_html;
    }

    public function setContentHtml(?string $content_html): self
    {
        $this->content_html = $content_html;

        return $this;
    }

    public function getArticleid(): ?int
    {
        return $this->articleid;
    }

    public function setArticleid(?int $articleid): self
    {
        $this->articleid = $articleid;

        return $this;
    }
}
