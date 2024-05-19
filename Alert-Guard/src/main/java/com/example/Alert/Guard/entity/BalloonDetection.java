package com.example.Alert.Guard.entity;
import jakarta.persistence.*;
import lombok.AllArgsConstructor;
import lombok.Data;
import lombok.NoArgsConstructor;

import java.security.Timestamp;

@Entity
@Table(name = "balloon_detection")
@Data
@AllArgsConstructor
@NoArgsConstructor
public class BalloonDetection {
    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    private Long detectionId;
    @ManyToOne
    @JoinColumn(name = "user_id")
    private User user;
    private Timestamp detectionTime;
    private boolean explosion;
}