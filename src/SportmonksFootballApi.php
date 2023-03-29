<?php

namespace IgorLealAntunes\SportmonksFootballApi;

use IgorLealAntunes\SportmonksFootballApi\Concerns\BuildClient;
use IgorLealAntunes\SportmonksFootballApi\Concerns\CanSendGetRequest;
use IgorLealAntunes\SportmonksFootballApi\Exceptions\InvalidApiToken;
use IgorLealAntunes\SportmonksFootballApi\Resources\CoachResource;
use IgorLealAntunes\SportmonksFootballApi\Resources\CommentaryResource;
use IgorLealAntunes\SportmonksFootballApi\Resources\FixtureResource;
use IgorLealAntunes\SportmonksFootballApi\Resources\InplayOddResource;
use IgorLealAntunes\SportmonksFootballApi\Resources\LeagueResource;
use IgorLealAntunes\SportmonksFootballApi\Resources\LivescoreResource;
use IgorLealAntunes\SportmonksFootballApi\Resources\NewsResource;
use IgorLealAntunes\SportmonksFootballApi\Resources\PlayerResource;
use IgorLealAntunes\SportmonksFootballApi\Resources\PredictionResource;
use IgorLealAntunes\SportmonksFootballApi\Resources\PreMatchOddResource;
use IgorLealAntunes\SportmonksFootballApi\Resources\RefereeResource;
use IgorLealAntunes\SportmonksFootballApi\Resources\RivalResource;
use IgorLealAntunes\SportmonksFootballApi\Resources\RoundResource;
use IgorLealAntunes\SportmonksFootballApi\Resources\ScheduleResource;
use IgorLealAntunes\SportmonksFootballApi\Resources\SeasonResource;
use IgorLealAntunes\SportmonksFootballApi\Resources\StageResource;
use IgorLealAntunes\SportmonksFootballApi\Resources\StandingResource;
use IgorLealAntunes\SportmonksFootballApi\Resources\StateResource;
use IgorLealAntunes\SportmonksFootballApi\Resources\TeamResource;
use IgorLealAntunes\SportmonksFootballApi\Resources\TeamSquadResource;
use IgorLealAntunes\SportmonksFootballApi\Resources\TopscorerResource;
use IgorLealAntunes\SportmonksFootballApi\Resources\TransferResource;
use IgorLealAntunes\SportmonksFootballApi\Resources\TvStationResource;
use IgorLealAntunes\SportmonksFootballApi\Resources\VenueResource;

class SportmonksFootballApi
{
    use BuildClient, CanSendGetRequest;

    public function __construct(
        private readonly string $baseUrl,
        private readonly string $apiToken,
        private readonly string $timezone,
    ) {
        if (empty($this->apiToken)) {
            throw new InvalidApiToken('Invalid Api Token!');
        }
    }

    public static function make()
    {
        return new static(
            baseUrl: env('SPORTMONKS_FOOTBALL_API_BASE_URL', 'https://api.sportmonks.com/v3/football/'),
            apiToken: env('SPORTMONKS_FOOTBALL_API_TOKEN'),
            timezone: env('SPORTMONKS_FOOTBALL_API_TIMEZONE', 'UTC'),
        );
    }

    public function livescore(): LivescoreResource
    {
        return new LivescoreResource(
            service: $this,
        );
    }

    public function fixture(): FixtureResource
    {
        return new FixtureResource(
            service: $this,
        );
    }

    public function league(): LeagueResource
    {
        return new LeagueResource(
            service: $this,
        );
    }

    public function schedule(): ScheduleResource
    {
        return new ScheduleResource(
            service: $this,
        );
    }

    public function season(): SeasonResource
    {
        return new SeasonResource(
            service: $this,
        );
    }

    public function team(): TeamResource
    {
        return new TeamResource(
            service: $this,
        );
    }

    public function news(): NewsResource
    {
        return new NewsResource(
            service: $this,
        );
    }

    public function commentary(): CommentaryResource
    {
        return new CommentaryResource(
            service: $this,
        );
    }

    public function standing(): StandingResource
    {
        return new StandingResource(
            service: $this,
        );
    }

    public function player(): PlayerResource
    {
        return new PlayerResource(
            service: $this,
        );
    }

    public function topscorer(): TopscorerResource
    {
        return new TopscorerResource(
            service: $this,
        );
    }

    public function rival(): RivalResource
    {
        return new RivalResource(
            service: $this,
        );
    }

    public function venue(): VenueResource
    {
        return new VenueResource(
            service: $this,
        );
    }

    public function round(): RoundResource
    {
        return new RoundResource(
            service: $this,
        );
    }

    public function preMatchOdd(): PreMatchOddResource
    {
        return new PreMatchOddResource(
            service: $this,
        );
    }

    public function inplayOdd(): InplayOddResource
    {
        return new InplayOddResource(
            service: $this,
        );
    }

    public function coach(): CoachResource
    {
        return new CoachResource(
            service: $this,
        );
    }

    public function stage(): StageResource
    {
        return new StageResource(
            service: $this,
        );
    }

    public function teamSquad(): TeamSquadResource
    {
        return new TeamSquadResource(
            service: $this,
        );
    }

    public function tvStation(): TvStationResource
    {
        return new TvStationResource(
            service: $this,
        );
    }

    public function prediction(): PredictionResource
    {
        return new PredictionResource(
            service: $this,
        );
    }

    public function state(): StateResource
    {
        return new StateResource(
            service: $this,
        );
    }

    public function referee(): RefereeResource
    {
        return new RefereeResource(
            service: $this,
        );
    }

    public function transfer(): TransferResource
    {
        return new TransferResource(
            service: $this,
        );
    }
}
