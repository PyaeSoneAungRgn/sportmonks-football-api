<?php

namespace PyaeSoneAung\SportmonksFootballApi;

use PyaeSoneAung\SportmonksFootballApi\Concerns\BuildClient;
use PyaeSoneAung\SportmonksFootballApi\Concerns\CanSendGetRequest;
use PyaeSoneAung\SportmonksFootballApi\Exceptions\InvalidApiToken;
use PyaeSoneAung\SportmonksFootballApi\Resources\CoachResource;
use PyaeSoneAung\SportmonksFootballApi\Resources\CommentaryResource;
use PyaeSoneAung\SportmonksFootballApi\Resources\FixtureResource;
use PyaeSoneAung\SportmonksFootballApi\Resources\InplayOddResource;
use PyaeSoneAung\SportmonksFootballApi\Resources\LeagueResource;
use PyaeSoneAung\SportmonksFootballApi\Resources\LivescoreResource;
use PyaeSoneAung\SportmonksFootballApi\Resources\NewsResource;
use PyaeSoneAung\SportmonksFootballApi\Resources\PlayerResource;
use PyaeSoneAung\SportmonksFootballApi\Resources\PredictionResource;
use PyaeSoneAung\SportmonksFootballApi\Resources\PreMatchOddResource;
use PyaeSoneAung\SportmonksFootballApi\Resources\RefereeResource;
use PyaeSoneAung\SportmonksFootballApi\Resources\RivalResource;
use PyaeSoneAung\SportmonksFootballApi\Resources\RoundResource;
use PyaeSoneAung\SportmonksFootballApi\Resources\ScheduleResource;
use PyaeSoneAung\SportmonksFootballApi\Resources\SeasonResource;
use PyaeSoneAung\SportmonksFootballApi\Resources\StageResource;
use PyaeSoneAung\SportmonksFootballApi\Resources\StandingResource;
use PyaeSoneAung\SportmonksFootballApi\Resources\StateResource;
use PyaeSoneAung\SportmonksFootballApi\Resources\TeamResource;
use PyaeSoneAung\SportmonksFootballApi\Resources\TeamSquadResource;
use PyaeSoneAung\SportmonksFootballApi\Resources\TopscorerResource;
use PyaeSoneAung\SportmonksFootballApi\Resources\TransferResource;
use PyaeSoneAung\SportmonksFootballApi\Resources\TvStationResource;
use PyaeSoneAung\SportmonksFootballApi\Resources\VenueResource;

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
